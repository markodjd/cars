@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <div>
        <h1>Welcome {{ $name }}!</h1>
        <h1>I'm {{ $age }} years old!</h1>
    </div>

@endsection
