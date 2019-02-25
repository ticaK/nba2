<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;

class RegisterController extends Controller
{


    public function create(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->only(['email','name','password']);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        return redirect('/teams');

    }



}
