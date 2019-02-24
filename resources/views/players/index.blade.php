@extends('partials.master')

@section('title','players')

@section('content')
    @foreach($players as $player)
       <h3><a href = "/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></h3>
    @endforeach

@endsection