<?php

namespace App\Http\Controllers;
use App\Http\Requests\Register;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Register $request){
        $user = User::create([
        	'firstName' => $request->firstName,
        	'lastName' => $request->lastName,
        	'email' => $request->email,
        	'password' => bcrypt($request->password)
    	]);
    	return $user;
    }
}
