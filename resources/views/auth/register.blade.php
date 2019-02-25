@extends('layouts.master')

@section('title','Register')
    
@section('content')
    <h2 class="blog-post-title">Register</h2>

    <form method="POST" action = "{{route('register')}}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid' : ''}}" id="name" name="name"/>
            @include('partials.invalid-feedback', ['field' => 'name'])
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control {{$errors->has('email')? 'is-invalid' : ''}}" id="email" name="email"/>
            @include('partials.invalid-feedback', ['field' => 'email'])
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control {{$errors->has('password')? 'is-invalid' : ''}}" id="password" name="password"/>
            @include('partials.invalid-feedback', ['field' => 'password'])
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm password</label>
            <input type="password" class="form-control {{$errors->has('password_confirmation')? 'is-invalid' : ''}}" id="password_confirmation" name="password_confirmation"/>
            @include('partials.invalid-feedback', ['field' => 'password_confirmation'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

    </form>
@endsection
