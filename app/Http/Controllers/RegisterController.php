<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Verification;
class RegisterController extends Controller
{


    public function create(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_verified' => false,
        ]);

        Mail::to($request->email)->send(new Verification($user));

        return redirect()->route('login');


    }



}
