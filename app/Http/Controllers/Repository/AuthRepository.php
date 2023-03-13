<?php

namespace App\Http\Controllers\Repository;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthRepository extends BaseController
{
    public function Login($input){
       $validation = Validator::make($input, [
           'email' => 'required|email',
           'password' => 'required',
       ]);
       if($validation->fails()){
           return ['status' => 500, 'error' => $validation->errors()];
       }

       $userInfo = User::where('email',$input['email'])->first();
       dd($userInfo);

    }

    public function Register($input){
        try {

            $validation = Validator::make($input, [
                'name' => 'required',
                'email' => 'required|unique:users,email' ,
                'password' => 'required|confirmed'
            ]);
            if($validation->fails()){
                return ['status' => 500, 'error' => $validation->errors()];
            }

            $user = new User();
            $user->name = $input['name'];
            $user->email = $input['email'];
            $user->phone = $input['phone'] ?? null;
            $user->password = bcrypt($input['password']);
            $user->save();
            return ['status' => 200, 'msg' => 'Registration successful'];

        } catch (\Exception $e){
            return ['status' => 500, 'error' => $e->getMessage(), 'line' => $e->getLine()];
        }

    }
}
