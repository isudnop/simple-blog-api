<?php
namespace App\Repository;

use App\Models\User;

class UserRepository extends CommonRepository
{
    public function model()
    {
        return '\App\Models\User';
    }

    /**
     * get user by api_token
     *
     * @param string $token
     *
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function findByToken(string $token)
    {
        return $this->model->where('api_token', '=', $token)->firstOrFail();
    }

    /**
     * Find user by given email
     *
     * @param string $email
     *
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function findByEmail(string $email)
    {
        return $this->model
            ->where('email', '=', $email)
            ->firstOrFail();
    }

    /**
     * Generate api_token and save to database
     *
     * @param User $user
     */
    public function generateApiToken(User $user)
    {
        $user->api_token = md5(uniqid($user->email, true));
        $user->save();
    }
}
