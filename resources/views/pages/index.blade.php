@extends('layouts.app')

@section('content')
    <div class="jumbotron d-flex align-items-center flex-column">
        <h1 class="display-4">{{ $title }}</h1>
        <p>This is laravel application from "Laravel"</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/lsapp/public/register" role="button">Register</a>
        </p>
    </div>
@endsection


