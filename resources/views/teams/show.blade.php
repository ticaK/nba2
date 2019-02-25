@extends('layouts.master')

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

   <h5>Comments:</h5>
   <ul class="list-group">
   @foreach ($team->comments as $comment)
    <li class="list-group-item" >
      <strong>{{$comment->content}}</strong><br>
      <small>by {{$comment->user->name}} </small>
    </li>
   @endforeach

   </ul>
       

      <form method = "POST" action="{{route('comments',['id'=>$team->id])}}"> 
         @csrf
          
         <div class="form-group">
          <label for="textarea" class="col-4 col-form-label">Comment</label>
          <div class="col-8">
              <textarea id="textarea"
               name="content" 
               cols="40" 
               rows="5"
                class="form-control {{$errors->has('content') ? 'is-invalid' : ''}}">{{ old('content') }}</textarea>
              @include('partials.invalid-feedback',['field'=>'content']) 
  
          </div>
          </div>
  
            <div class="form-group row">
                  <div class="offset-4 col-8">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
          </div>
  
      </form>
      
  </div>


@endsection