@extends('layouts.master')

@section('content')
    <h2 class="blog-post-title">Login</h2>

    <form method="POST" action ="{{route('login')}}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control {{$errors->has('email')? 'is-invalid' : ''}}"  id="email" name="email" value ="{{old('email')}}"/>
            @include('partials.invalid-feedback', ['field' => 'email'])
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control {{$errors->has('password')? 'is-invalid' : ''}}"  id="password" name="password"/>
            @include('partials.invalid-feedback', ['field' => 'password'])
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control {{$errors->has('message')? 'is-invalid' : ''}}"  id="message" name="message"/>
            @include('partials.invalid-feedback', ['field' => 'message'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>
   


@endsection