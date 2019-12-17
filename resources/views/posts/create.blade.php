@extends('layouts.app')
@section('content')
<h1 class="title">Create Post</h1>
{!! Form::open(['action' => 'PostController@store','method' =>'POST']) !!}
    <div class = "form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class' =>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class = "form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class' =>'form-control','placeholder'=>'Body Text','rows'=>'10'])}}
      </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection