<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\User;
use App\Mail\Verification;


class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }


    public function store () {

        if(!auth()->attempt(request(['email', 'password']))) {

            return back()->withErrors(['message' => 'Bad credentials. Please try again']);

        } else {

            if(auth()->user()->is_verified) {

                return redirect()->route('teams');

            } else {

                $this->destroy();

                return back()->withErrors(['message' => 'You are not verified!']);

            }
        }
    }

    public function verification ($id) {

        $user = User::find($id);

        $user->is_verified = true;
        $user->save();

        return view('auth.verification', compact('user'));

    }

    public function destroy () {

        auth()->logout();

        return redirect()->route('show-login');

    }

}
