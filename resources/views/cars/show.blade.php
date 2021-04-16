@extends('layouts.app')

@section('title', $car->model)

@section('content')

    <div>
        <h1 class="cars-title">{{ $car->model }}</h1>
        <div class="cars-container">
            <div class="cars-title grid-item">
                <h2>{{ $car->title }} <small class="small">- added
                        {{ $car->created_at->diffForHumans() }}</small>
                </h2>
                <p>Producer: <strong>{{ $car->producer }}</strong></p>
                <p>Number of doors: <strong>{{ $car->number_of_doors }}</strong></p>
            </div>
        </div>
    </div>

@endsection
