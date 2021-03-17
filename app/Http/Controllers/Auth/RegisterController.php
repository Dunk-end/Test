<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\RegisterService;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected function create(RegisterRequest $req)
    {
        if (RegisterService::create($req->all())) {

            return response()->json([
                'status' => 'Вы успешно зарегистрировались!'
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }
}
