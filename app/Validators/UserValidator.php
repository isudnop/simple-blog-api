<?php
namespace App\Validators;

class UserValidator extends CommonValidator
{
    /**
     * @param array $params
     */
    public function validateRegister(array $params)
    {
        $rules = [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:70|unique:users',
            'password' => 'required|string|min:6|max:30|confirmed',
        ];

        $this->validate($params, $rules);
    }

    /**
     * @param array $params
     */
    public function validateGetUserByToken(array $params)
    {
        $rules = [
            'api_token' => 'required|string',
        ];

        $this->validate($params, $rules);
    }
}
