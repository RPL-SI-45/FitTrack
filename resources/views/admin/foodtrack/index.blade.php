@extends('layouts/contentNavbarLayout')

@section('title', 'Daftar Menu')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
            <div class="card-header text-center">
                <h4 class="card-title mb-0">Daftar Menu</h4>
                <p class="mb-0">Silahkan tambahkan menu makanan 📋</p>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Menu Makanan utama (cal)</th>
                                <th>Menu Makanan Ringan (cal)</th>
                                <th>Menu Minuman (cal)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @forelse($foods as $food)
                                <tr>
                                    <td>{{ $food->id }}</td>
                                    <td>{{ $food->nama_makanan_utama }} - {{ $food->kalori_utama }} cal</td>
                                    <td>{{ $food->nama_makanan_ringan }} - {{ $food->kalori_ringan }} cal</td>
                                    <td>{{ $food->nama_minuman }} - {{ $food->kalori_minuman }} cal</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="actionDropdown">
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="{{ route('admin.foodtrack.edit', $food->id) }}">Edit</a>
                                                <form action="{{ route('admin.foodtrack.destroy', $food->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada catatan makanan yang ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="text-center" style="margin-top: 2rem;">
                <div class="mb-3">
                            <a href="{{ route('admin.foodtrack.create') }}" class="btn btn-primary">
                                <i class="mdi mdi-plus"></i>
                            </a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-style')
<style>
    .card {
        padding: 2rem;
    }
    .card-header {
        padding: 1.5rem;
    }
    .card-title {
        font-size: 1.75rem;
        font-weight: bold;
    }
    .card-header p {
        font-size: 1.125rem;
        margin-top: 0.5rem;
    }
    .table {
        margin-top: 1.5rem;
    }
    .table th, .table td {
        font-size: 0.875rem;
        text-align: center;
    }
    .btn-primary {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }
    .dropdown-menu {
        min-width: auto;
    }
    .dropdown-item {
        cursor: pointer;
    }
</style>
@endsection
