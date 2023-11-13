<?php

namespace App\Http\Controllers;

use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $result = AuthHelper::login($request->user_email, $request->password);
        return $result;
    }

    public function logout(Request $request)
    {
        AuthHelper::logout();
        return redirect()->route('login');
    }

}
