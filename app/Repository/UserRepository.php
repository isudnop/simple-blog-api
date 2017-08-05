<?php
namespace App\Repository;

class UserRepository extends CommonRepository
{
    public function model()
    {
        return '\App\Models\User';
    }
}
