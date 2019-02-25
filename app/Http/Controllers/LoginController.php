<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }


    public function store(LoginRequest $request){
        if(!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors(['message' => 'Wrong email or password']);
        }
        return redirect()->route('teams');
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('show-login');
    }

}
