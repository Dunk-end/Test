<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    public static function create(array $data)
    {
        User::create([
            'name' => data_get($data, 'name'),
            'login' => data_get($data, 'login'),
            'password' => Hash::make(data_get($data, 'password'))
        ]);

        return true;
    }
}
