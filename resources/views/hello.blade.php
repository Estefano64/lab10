<!-- resources/views/hello.blade.php -->

@extends('layout')

@section('title', 'Hello Blade!')

@section('content')
<h1>Hello, {{ $name }}!</h1>
@endsection