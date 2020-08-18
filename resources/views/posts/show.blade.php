@extends('layouts.app')

@section('content')
    <a href="/lsapp/public/posts" class="btn btn-outline-dark mb-3" style="width: 100px">Go Back</a>
    <h1>{{ $post-> title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr>
    <a href="/lsapp/public/posts/{{ $post->id }}/edit" class="btn btn-outline-dark mb-3" style="width: 100px">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger', 'style' => 'width:100px'])}}
    {!!Form::close()!!}
@endsection