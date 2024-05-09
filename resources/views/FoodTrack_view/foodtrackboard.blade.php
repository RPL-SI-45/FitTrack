<!-- resources/views/foodtrackboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Food Track Board</h1>
        <!-- Tampilkan total kalori disini -->
        <p>Total Calories: {{ $totalCalories }}</p>
        <a href="{{ route('pilihmakanan') }}" class="btn btn-primary">Tambah</a>
    </div>
@endsection