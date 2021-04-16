@extends('layouts.app')

@section('title', $car->model)

@section('content')

    <div>
        <h1 class="cars-title">{{ $car->model }}</h1>
        <div class="cars-container">
            <div class="cars-title">
                <h3><a href="/cars/{{ $car->id }}">{{ $car->model }} {{ $car->producer }}</a> <small
                        class="small">- added
                        {{ $car->created_at->diffForHumans() }}</small>
                </h3>
                <p>Number of doors: {{ $car->number_of_doors }}</p>
            </div>
        </div>
    </div>

@endsection
