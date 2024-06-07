@extends('layouts.contentNavbarLayout')

@section('title', 'Create Article')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
        <div class="card-header text-center">
                <h3 class="card-title mb-2">Tambahkan Artikel</h3>
                <p class="mb-0">Tambahkan Data Artikel 📅</p>
            </div>
      <form action="{{ route('admin.artikel.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
          <label for="year" class="form-label">Year</label>
          <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
