@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3 p-3">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="" alt="">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/lsapp/public/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection