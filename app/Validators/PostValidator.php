<?php
namespace App\Validators;

class PostValidator extends CommonValidator
{
    /**
     * @param array $params
     */
    public function validateSavePost(array $params)
    {
        $rules = [
            'title' => 'bail|required|string|max:200',
            'body' => 'bail|required|string|max:1000',
            'user_id' => 'required|integer|exists:users,id',
        ];

        $this->validate($params, $rules);
    }
}
