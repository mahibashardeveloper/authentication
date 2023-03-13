<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontController extends BaseController
{
    public function dashboard(){

        return view('auth.page.dashboard');

    }

    public function login(){

        return view('auth.login');

    }

    public function register(){

        return view('auth.register');

    }

    public function forget(){

        return view('auth.forget');

    }

    public function reset(){

        return view('auth.reset');

    }

}
