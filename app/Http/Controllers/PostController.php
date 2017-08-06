<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Repository\PostRepository;
use App\Validators\PostValidator;

class PostController extends BaseController
{
    /** @var PostRepository */
    protected $postRepository;

    /** @var PostValidator */
    protected $postValidator;

    public function __construct(PostRepository $postRepository, PostValidator $postValidator)
    {
        $this->postRepository = $postRepository;
        $this->postValidator      = $postValidator;
    }

    /**
     * Get All post with descending order
     *
     * @return JsonResponse
     */
    public function getPostsDesc() : JsonResponse
    {
        $posts = $this->postRepository->allDesc()->toArray();

        return response()->json($posts, 200);
    }

    /**
     * Get All post with ascending order
     *
     * @return JsonResponse
     */
    public function getPostsAsc()
    {
        $posts = $this->postRepository->allAsc()->toArray();

        return response()->json($posts, 200);
    }

    /**
     * Get single post by given id
     *
     * @param int $postId
     *
     * @return JsonResponse
     */
    public function getPost(int $postId)
    {
        $result = $this->postRepository->getById($postId);

        return response()->json($result, 200);
    }

    /**
     * save new post
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function savePost(Request $request) : JsonResponse
    {
        $params = $request->all();

        $this->postValidator->validateSavePost($params);

        $this->postRepository->create($params);

        return response()->json(['result' => 'success'], 201);
    }
}
