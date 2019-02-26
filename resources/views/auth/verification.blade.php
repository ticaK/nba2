@extends('layouts.master')

@section('title','verification')
    

@section('content')

    <h3>Welcome {{ $user->name }}. Click <a href="{{ route('show-login') }}">here</a> for login</h3>



@endsection
