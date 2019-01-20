<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginLogoutController extends Controller
{

    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(LoginRequest $request)
    {
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    		return redirect(route('list.cate'));
    	}
    	else {
    		return view('admin.login')->with('alert', 'Sai tài khoản/mật khẩu');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	
    	return redirect(route('login.admin'));
    }
}
