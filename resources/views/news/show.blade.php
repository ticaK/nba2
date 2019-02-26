@extends('layouts.master')

@section('content')
<small>Ova novost se odnosi na timove:</small>
@foreach($news->teams as $team)
<a href = "/teams/{{$team->id}}">{{$team->name}} </a>
@endforeach <br>
{{$news->title}}<br>
{{$news->content}}<br><br>
By: <strong>{{$news->user->name}}</strong>, {{$news->user->email}} <br>
At {{$news->created_at}}
@endsection