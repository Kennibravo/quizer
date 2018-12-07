<?php

namespace quizer\Http\Controllers\Auth;

use Illuminate\Http\Request;
use quizer\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    protected function guard(){
    	return Auth::guard('admin');
    }

    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';

    public function __construct(){
    	$this->middleware('guest:admin')->except('logout');
    }
}
