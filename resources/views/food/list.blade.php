@include('layout.app', ['class' => 'd-flex flex-column min-vh-100'])
@include('layout.navbar');
<div class="container mt-4 flex-grow-1">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Daftar Makanan</h2>
      <a href="{{ route('food.create') }}" class="btn btn-success">Tambah Data Baru</a>
    </div>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Protein</th>
          <th scope="col">Jumlah Kalori (gram)</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($foods as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->protein}}</td>
          <td>{{$item->calories}}</td>
          <td>
            <a href="{{ route('food.get', ['id' => $item->id]) }}" type="button" class="btn btn-primary">Edit</a>
            <a href="{{ route('food.delete', ['id' => $item->id]) }}" type="button" class="btn btn-danger">Hapus</button>
          </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  </div>
@include('layout.footer')