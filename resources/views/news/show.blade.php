@extends('layouts.master')

@section('content')
{{$news->title}}<br>
{{$news->content}}<br><br>
By: <strong>{{$news->user->name}}</strong>, {{$news->user->email}} <br>
At {{$news->created_at}}
@endsection