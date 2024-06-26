@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Menu')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
            <div class="card-header text-center">
                <h4 class="card-title mb-0">Edit Menu</h4>
                <p class="mb-0">Silahkan edit menu makanan 📋</p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.foodtrack.update', $foodTrack->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Jenis Makanan Utama -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_makanan_utama" class="form-label">Nama Menu Makanan Utama</label>
                            <input type="text" class="form-control" id="nama_makanan_utama" name="nama_makanan_utama" value="{{ $foodTrack->nama_makanan_utama }}">
                        </div>
                        <div class="col-md-6">
                            <label for="kalori_utama" class="form-label">Kalori Makanan Utama (cal)</label>
                            <input type="number" class="form-control" id="kalori_utama" name="kalori_utama" value="{{ $foodTrack->kalori_utama }}">
                        </div>
                    </div>

                    <!-- Jenis Makanan Ringan -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_makanan_ringan" class="form-label">Nama Menu Makanan Ringan</label>
                            <input type="text" class="form-control" id="nama_makanan_ringan" name="nama_makanan_ringan" value="{{ $foodTrack->nama_makanan_ringan }}">
                        </div>
                        <div class="col-md-6">
                            <label for="kalori_ringan" class="form-label">Kalori Makanan Ringan (cal)</label>
                            <input type="number" class="form-control" id="kalori_ringan" name="kalori_ringan" value="{{ $foodTrack->kalori_ringan }}">
                        </div>
                    </div>

                    <!-- Jenis Minuman -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_minuman" class="form-label">Nama Menu Minuman</label>
                            <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" value="{{ $foodTrack->nama_minuman }}">
                        </div>
                        <div class="col-md-6">
                            <label for="kalori_minuman" class="form-label">Kalori Minuman (cal)</label>
                            <input type="number" class="form-control" id="kalori_minuman" name="kalori_minuman" value="{{ $foodTrack->kalori_minuman }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
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
    .form-label {
        font-weight: bold;
    }
    .btn-primary {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }
</style>
@endsection
