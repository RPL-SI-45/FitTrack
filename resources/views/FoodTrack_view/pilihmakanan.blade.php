<!-- resources/views/pilihmakanan.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pilih Makanan</h1>
        <form action="{{ route('logmakanan') }}" method="POST">
            @csrf
            <!-- Dropdown untuk jenis makanan -->
            <select name="jenis_makanan" id="jenis_makanan">
                <option value="1">Makanan Jenis 1</option>
                <option value="2">Makanan Jenis 2</option>
                <!-- Tambahkan pilihan jenis makanan lainnya sesuai kebutuhan -->
            </select>
            <!-- Dropdown untuk makanan spesifik -->
            <select name="makanan" id="makanan">
                <option value="1">Makanan 1</option>
                <option value="2">Makanan 2</option>
                <!-- Tambahkan pilihan makanan lainnya sesuai kebutuhan -->
            </select>
            <button type="submit" class="btn btn-primary">Pilih</button>
        </form>
    </div>
@endsection