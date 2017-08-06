<?php
namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Repository\UserRepository;
use App\Validators\UserValidator;

class UserController extends BaseController
{
    /** @var UserRepository */
    protected $userRepository;
    /** @var UserValidator */
    protected $userValidator;

    public function __construct(UserRepository $userRepository,UserValidator $userValidator)
    {
        $this->userRepository = $userRepository;
        $this->userValidator  = $userValidator;
    }

    /**
     * Register User
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function registerUser(Request $request) : JsonResponse
    {
        $data = $request->only(['email', 'name', 'password', 'password_confirmation']);

        $this->userValidator->validateRegister($data);

        $params = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ];

        $user = $this->userRepository->create($params);

        $this->userRepository->generateApiToken($user);

        return response()->json($user->toArray(), 201);
    }

    /**
     * Login User
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function loginUser(Request $request)
    {
        $param = $request->only(['email', 'password']);

        $this->userValidator->validateLogin($param);

        $user = $this->userRepository->findByEmail($param['email']);

        if (password_verify($param['password'],$user->password)) {
            $this->userRepository->generateApiToken($user);

            return response()->json($user->toArray(), 200);
        }

        return response()->json(['error' => 'YOU SHALL NOT PASS'], 401);
    }

    /**
     * Get user detail by token
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getUserDetail(Request $request) : JsonResponse
    {
        $token = $request->get('api_token');

        $this->userValidator->validateGetUserByToken(['api_token' => $token]);

        $user = $this->userRepository->findByToken($token);

        return response()->json($user->toArray(), 200);
    }
}
