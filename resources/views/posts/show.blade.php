@extends('layouts.app')
@section('content')
   <u><a class="title" href = "/posts"><-Go Back</a></u>
   <h1 class="title">{{$post->title}}</h1>
   <div  class = "well" >
        {{$post->body}} 
   </div> 
   <hr>
  <small class="title">Written on : {{$post->created_at}} by {{$post->user->name}}</small>
   <hr>
   @if(!Auth::guest())
     @if(Auth::user()->id == $post->user_id)
   <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

   {!!Form::open(['action' => ['PostController@destroy',$post->id] ,'method' => 'POST','class' => 'pull-right'])!!} 
     {{Form::hidden('_method','DELETE')}}
     {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
   {!!Form::close()!!}
   @endif
    @endif
@endsection