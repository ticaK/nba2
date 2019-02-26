@extends('layouts.master')

@section('content')
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