@extends('layouts.blog')

@section('content')

    @foreach ($tema->blogs as $blog)

    <h1>{{ $blog->name }}</h1>    

    @endforeach


@endsection

