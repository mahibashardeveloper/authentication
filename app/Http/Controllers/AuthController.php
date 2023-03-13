<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repository\AuthRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function Login(Request $request){
        $input = $request->all();
        $rv = AuthRepository::Login($input);
        return response()->json($rv, 200);
    }
    public function Register(Request $request){
        $input = $request->all();
        $rv = AuthRepository::Register($input);
        return response()->json($rv, 200);
    }
}
