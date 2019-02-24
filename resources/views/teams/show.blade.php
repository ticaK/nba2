@extends('partials.master')

@section('title','Teams')

@section('content')
    <h1>{{$team->name}}</h1>
   <ul class="list-group">
       <li class="list-group-item">Address:{{$team->address}}</li>
       <li class="list-group-item">Email:{{$team->email}}</li>
       <li class="list-group-item">City:{{$team->city}}</li>
       <h3>Players:</h3>
        <ul>
            @foreach($team->players as $player)
              <li><a href = "/players/{{$player->id}}">{{$player->first_name}} {{$player->first_name}}</a></li>
            @endforeach 
        </ul>
   </ul>

@endsection