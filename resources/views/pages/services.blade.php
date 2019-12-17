@extends('layouts.app')
@section('content')
<h1 class="title">{{$title}}</h1>
<p class="title">This is service page</p>
<ol class="list-group">
    @foreach ($services as $service)
   <li class="list-group-item">{{$service}}</li>
    @endforeach
</ol>
@endsection