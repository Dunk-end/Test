<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function login(LoginRequest $req)
    {
        if (Auth::attempt($req->only(['login', 'password']))) {
            Auth::user();

            $user = User::orderBy('remember_token')
                ->where('login', $req->input('login'))
                ->get();
            $token = $user['0']['remember_token'];


            return response()->json([
                'status' => 'Вы успешно авторизовались!',
                'token' => $token
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }
}
