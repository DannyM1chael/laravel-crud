@extends('layouts.app')

@section('content')
    <a href="/lsapp/public/posts" class="btn btn-outline-dark mb-3">Go Back</a>
    <h1>{{ $post-> title }}</h1>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
@endsection