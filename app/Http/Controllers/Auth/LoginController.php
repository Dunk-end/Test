<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $req)
    {
        if (Auth::attempt($req->only(['login', 'password']))) {

            return response()->json([
                'status' => 'Вы успешно авторизоивались!'
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }
}
