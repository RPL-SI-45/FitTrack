@include('layout.app', ['class' => 'd-flex flex-column min-vh-100'])
@include('layout.navbar')
<div class="container mt-4 flex-grow-1">
    <h2>Edit Data Makanan</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('food.edit', ['id' => $id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Makanan</label>
            <input type="text" class="form-control" name="name" value="{{ $name }}">
            @error('name') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
        </div>
        <div class="form-group">
            <label for="protein">Jenis Protein</label>
            <input type="text" class="form-control" name="protein" value="{{ $protein }}">
            @error('protein') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
        </div>
        <div class="form-group">
            <label for="calories">Jumlah Kalori</label>
            <input type="number" class="form-control" name="calories" value="{{ $calories }}">
            @error('calories') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('food') }}" class="btn btn-success">Lihat List</a> <!-- Tombol dipindahkan ke sini -->
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
@include('layout.footer')