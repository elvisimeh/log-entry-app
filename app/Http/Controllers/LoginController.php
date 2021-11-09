<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Auth;


class LoginController extends Controller
{
    //

    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
            'email' => ['Credentials incorrect']
            ]);
        }
        return $user->createToken('Auth Token')->accessToken;
    }

    public function logout()
{
  Auth::logout();
  return redirect('/');
}
}
