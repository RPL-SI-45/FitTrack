@extends('layouts.contentNavbarLayout')

@section('title', 'Food Track')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
            <div class="card-header text-center">
                <h4 class="card-title mb-0">Food Track</h4>
                <p class="mb-0">Catat makanan yang dikonsumsi 📅</p>
            </div>
            <div class="card-body">
                <form action="{{ route('content.foodtrack.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="jenis_makanan" class="form-label">Jenis Makanan</label>
                        <select class="form-select" id="jenis_makanan" name="jenis_makanan" required>
                            <option value="makanan_utama">Makanan Utama</option>
                            <option value="makanan_ringan">Makanan Ringan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_kalori" class="form-label">Nama Menu dan Kalori</label>
                        <select class="form-select" id="nama_kalori" name="nama_kalori" required>
                            <!-- Placeholder untuk pilihan nama menu dan kalori akan diisi melalui JavaScript -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_makan" class="form-label">Tanggal Makan</label>
                        <input type="date" class="form-control" id="tanggal_makan" name="tanggal_makan" required>
                    </div>
                    <div class="mb-3">
                        <label for="waktu_makan" class="form-label">Waktu Makan</label>
                        <select class="form-select" id="waktu_makan" name="waktu_makan" required>
                            <option value="sarapan">Sarapan</option>
                            <option value="makan_siang">Makan Siang</option>
                            <option value="makan_malam">Makan Malam</option>
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
@endsection

@section('page-script')
<script>
    document.getElementById('jenis_makanan').addEventListener('change', function() {
        var jenisMakanan = this.value;
        var namaKaloriDropdown = document.getElementById('nama_kalori');

        // Mengosongkan dropdown nama menu dan kalori
        namaKaloriDropdown.innerHTML = '';

        // Mengambil data nama menu dan kalori dari controller berdasarkan jenis makanan yang dipilih
        fetch('/api/menu-data/' + jenisMakanan)
            .then(response => response.json())
            .then(data => {
                data.forEach(menu => {
                    var option = document.createElement('option');
                    option.value = `${menu.nama_menu} - ${menu.kalori}`; // Update value to contain menu and calories
                    option.text = `${menu.nama_menu} - ${menu.kalori} cal`;
                    namaKaloriDropdown.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error fetching menu data:', error);
            });
    });
</script>
@endsection
