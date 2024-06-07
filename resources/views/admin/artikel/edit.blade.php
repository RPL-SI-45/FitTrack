@extends('layouts.contentNavbarLayout')

@section('title', 'Edit Artikel')

@section('content')
<div class="row gy-4">
    <div class="col-lg-12">
        <div class="card" style="padding: 2rem;">
            <div class="card-header text-center">
                <h4 class="card-title mb-0">Edit Artikel</h4>
            </div>
      <form action="{{ route('artikel.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" id="author" name="author" value="{{ $article->author }}" required>
        </div>
        <div class="mb-3">
          <label for="year" class="form-label">Year</label>
          <input type="number" class="form-control" id="year" name="year" value="{{ $article->year }}" required>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <input type="text" class="form-control" id="category" name="category" value="{{ $article->category }}" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
