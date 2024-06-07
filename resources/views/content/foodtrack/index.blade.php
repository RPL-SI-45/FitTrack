@extends('layouts.contentNavbarLayout')

@section('title', 'Food Track')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
            <div class="card-header text-center">
                <h4 class="card-title mb-0">Food Track</h4>
                <p class="mb-0">Daftar makanan yang telah dikonsumsi 📅</p>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($foodTracks->isEmpty())
                    <p class="text-center">Belum ada data makanan yang tercatat.</p>
                    <div class="text-center mt-3">
                        <a href="{{ route('content.foodtrack.create') }}" class="btn btn-primary">
                            <i class="mdi mdi-plus"></i>
                        </a>
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Makanan</th>
                                <th>Nama Menu</th>
                                <th>Kalori</th>
                                <th>Tanggal Makan</th>
                                <th>Waktu Makan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($foodTracks as $index => $foodTrack)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ ucfirst(str_replace('_', ' ', $foodTrack->jenis_makanan)) }}</td>
                                    <td>{{ $foodTrack->nama_menu }}</td>
                                    <td>{{ $foodTrack->kalori }}</td>
                                    <td>{{ \Carbon\Carbon::parse($foodTrack->tanggal_makan)->format('d-m-Y') }}</td>
                                    <td>{{ ucfirst(str_replace('_', ' ', $foodTrack->waktu_makan)) }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="actionDropdown{{ $foodTrack->id }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="actionDropdown{{ $foodTrack->id }}">
                                                <a class="dropdown-item" href="javascript:void(0);" onclick="location.reload();">Refresh</a>
                                                <li><a class="dropdown-item" href="{{ route('content.foodtrack.edit', $foodTrack->id) }}">Edit</a></li>
                                                <li>
                                                    <form action="{{ route('content.foodtrack.destroy', $foodTrack->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Hapus</button>
                                                    </form>
                                                </li>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt-3">
                        <h5>Total Kalori: {{ $totalKalori }} cal</h5>
                        <div class="mb-3">
                            <a href="{{ route('content.foodtrack.create') }}" class="btn btn-primary">
                                <i class="mdi mdi-plus"></i>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
