@extends('layouts.master')

@section('content')
@if(session('message'))
   <em>{{session('message')}}</em>
@endif
<ul class="list-group">
    @foreach($news as $newws)
       <li class = "list-group-item" >
           <a href = "/news/{{$newws->id}}">{{$newws->title}}</a><br>
            By: {{$newws->user->name}}, {{$newws->user->email}} 
        </li>
    @endforeach
    {{$news->links()}}
</ul>
@endsection