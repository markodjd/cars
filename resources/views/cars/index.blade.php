@extends('layouts.app')

@section('title', 'Cars')

@section('content')

    <div>
        <h1 class="cars-title">Our cars</h1>
        <div class="cars-container">
            @forelse ($cars as $car)
                <div class="cars-title grid-item">
                    <h3><a href="{{ route('car', ['car' => $car->id]) }}">{{ $car->model }} {{ $car->producer }}</a>
                        <small class="small">- added
                            {{ $car->created_at->diffForHumans() }}</small>
                    </h3>
                </div>
            @empty
                <h3>No cars yet.</h3>
            @endforelse
        </div>
    </div>

@endsection
