@extends('layouts.contentNavbarLayout')

@section('title', 'Edit Data Makanan')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
            <div class="card-header text-center">
                <h4 class="card-title mb-0">Edit Data Makanan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('content.foodtrack.update', $foodTrack->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="jenis_makanan" class="form-label">Jenis Makanan</label>
                        <select class="form-select" id="jenis_makanan" name="jenis_makanan" required>
                            <option value="makanan_utama" {{ $foodTrack->jenis_makanan == 'makanan_utama' ? 'selected' : '' }}>Makanan Utama</option>
                            <option value="makanan_ringan" {{ $foodTrack->jenis_makanan == 'makanan_ringan' ? 'selected' : '' }}>Makanan Ringan</option>
                            <option value="minuman" {{ $foodTrack->jenis_makanan == 'minuman' ? 'selected' : '' }}>Minuman</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_menu" class="form-label">Nama Menu dan Kalori</label>
                        <select class="form-select" id="nama_menu" name="nama_menu" required>
                            @foreach($menus as $menu)
                                <option value="{{ $menu->nama_menu }} - {{ $menu->kalori }}" {{ $menu->nama_menu . ' - ' . $menu->kalori == $foodTrack->nama_menu . ' - ' . $foodTrack->kalori ? 'selected' : '' }}>{{ $menu->nama_menu }} - {{ $menu->kalori }} cal</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_makan" class="form-label">Tanggal Makan</label>
                        <input type="date" class="form-control" id="tanggal_makan" name="tanggal_makan" value="{{ $foodTrack->tanggal_makan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="waktu_makan" class="form-label">Waktu Makan</label>
                        <select class="form-select" id="waktu_makan" name="waktu_makan" required>
                            <option value="sarapan" {{ $foodTrack->waktu_makan == 'sarapan' ? 'selected' : '' }}>Sarapan</option>
                            <option value="makan_siang" {{ $foodTrack->waktu_makan == 'makan_siang' ? 'selected' : '' }}>Makan Siang</option>
                            <option value="makan_malam" {{ $foodTrack->waktu_makan == 'makan_malam' ? 'selected' : '' }}>Makan Malam</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Fetch menu data based on the selected jenis makanan
    document.getElementById('jenis_makanan').addEventListener('change', function() {
        var jenisMakanan = this.value;
        var namaMenuDropdown = document.getElementById('nama_menu');

        // Clear existing dropdown options
        namaMenuDropdown.innerHTML = '';

        // Fetch menu data via AJAX request
        fetch('/api/menu-data/' + jenisMakanan)
            .then(response => response.json())
            .then(data => {
                // Populate dropdown with fetched data
                data.forEach(menu => {
                    var option = document.createElement('option');
                    option.value = `${menu.nama_menu} - ${menu.kalori}`; // Update value to contain menu and calories
                    option.text = `${menu.nama_menu} - ${menu.kalori} cal`;
                    namaMenuDropdown.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error fetching menu data:', error);
            });
    });
</script>
@endsection
