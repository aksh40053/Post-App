@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header title"><h2>Dashboard</h2></div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href ="/posts/create" class="btn btn-primary">Create Post</a>
                     <h3 class="title">Your Blog Posts</h3>
                     @if(count($posts)>0)
                   <table >
                       <tr>
                           <th><h3 class="title">Title</h3></th> 
                           <th></th>
                           <th></th>
                       </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="table_data" ><a class="data" href = "/posts/{{$post->id}}">{{$post->title}}</a></td>
                                <td class="table_data"><a href="/posts/{{$post->id}}/edit" class='btn btn-default '>Edit</a></td>
                                <td class="table_data"> {!!Form::open(['action' => ['PostController@destroy',$post->id] ,'method' => 'POST','class' => 'pull-right'])!!} 
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                      {!!Form::close()!!}
                                </td>
                            </tr>    
                        @endforeach

                    </table>    
                    @else 
                     <p>You have no Posts</p>
                     @endif   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
