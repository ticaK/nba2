@extends('partials.master')

@section('title','Players')

@section('content')
    <h1>{{$player->first_name}} {{$player->last_name}}</h1>
   <ul class="list-group">
       <li class="list-group-item">Email:{{$player->email}}</li>
       <li class="list-group-item">
           <a href = "{{route('team',['id'=>$player->team->id])}}">{{$player->team->name}}</a>
       </li>

   </ul>

@endsection