<!-- resources/views/logmakanan.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Log Makanan</h1>
        <p>Makanan: {{ $makanan->nama_makanan }}</p>
        <p>Kalori: {{ $makanan->kalori }}</p>
        <p>Protein: {{ $makanan->protein }}</p>
        <p>Lemak: {{ $makanan->lemak }}</p>
        <p>Karbohidrat: {{ $makanan->karbohidrat }}</p>
        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
        <form action="{{ route('foodtrackboard') }}" method="GET">
            <button type="submit" class="btn btn-primary">Done</button>
        </form>
    </div>
@endsection