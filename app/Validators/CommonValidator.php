<?php
namespace App\Validators;

use Illuminate\Contracts\Validation\Factory as Validator;
use Illuminate\Validation\ValidationException;

abstract class CommonValidator
{
    protected $validator;
    protected $messages = [
        'required' => 'The :attribute field is required.',
        'string' => 'The :attribute field must be string.',
        'integer' => 'The :attribute field must be integer.',
        'exists' => 'The :attribute field not exists in system.',
    ];

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }
    /**
     * @param array $params
     * @param array $rules
     *
     * @throws ValidationException
     */
    public function validate(array $params, array $rules)
    {
        $validator = $this->validator->make($params, $rules, $this->messages);

        if ($validator->fails()) {
            throw new ValidationException($validator, response()->json(
                ['error' => $validator->messages()]
                ,422));
        }
    }
}
