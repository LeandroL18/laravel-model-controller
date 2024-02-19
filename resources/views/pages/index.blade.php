@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Movie:</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie -> title }}
            </li>
        @endforeach
    </ul>
@endsection
