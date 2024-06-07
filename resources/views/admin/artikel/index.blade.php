@extends('layouts.contentNavbarLayout')

@section('title', 'Artikel')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
            <div class="card-header text-center">
                <h4 class="card-title mb-0">Artikel</h4>
                <p class="mb-0">Silahkan tambahkan artikel 📅</p>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($articles->isEmpty())
                    <p class="text-center">Belum ada data artikel yang ditambahkan.</p>
                    <div class="text-center mt-3">
                        <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
                            <i class="mdi mdi-plus"></i>
                        </a>
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>Penulis</th>
                                <th>Tahun</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $index => $article)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ Str::limit($article->content, 150) }}</td>
                                    <td>{{ $article->author }}</td>
                                    <td>{{ $article->year }}</td>
                                    <td>{{ $article->category }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="actionDropdown{{ $article->id }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="actionDropdown{{ $article->id }}">
                                                <a class="dropdown-item" href="{{ route('admin.artikel.edit', $article->id) }}">Edit</a>
                                                <form action="{{ route('admin.artikel.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center mt-3">
                        <h5>Total Artikel: {{ $articles->count() }}</h5>
                        <div class="mb-3">
                            <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
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
