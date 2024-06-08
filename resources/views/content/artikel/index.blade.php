@extends('layouts.contentNavbarLayout')

@section('title', 'Articles')

<!-- Content -->
@section('content')

<div class="row gy-4">
  <div class="col-lg-12">
      <div class="card" style="padding: 2rem;">
          <div class="card-header text-center">
              <h4 class="card-title mb-0">Articles</h4>
              <p class="mb-0">🌿 Kumpulan Artikel tentang Kesehatan 🌿</p>
          </div>
          <div class="card-body position-relative">
              <div class="table-responsive">
                <div class="pb-2 form-group">
                  <form class="form-inline my-2 my-lg-0 mb-2" action="{{ route('artikel.search') }}" method="GET">
                    <select class="form-control mr-sm-2 mb-2" name="category">
                      <option value="">All Categories</option>
                      @foreach($categories as $category)
                        <option value="{{ $category }}" {{ request()->input('category') == $category ? 'selected' : '' }}>
                          {{ $category }}
                        </option>
                      @endforeach
                    </select>
                    <input class="form-control mr-sm-2 mb-2" type="search" placeholder="Cari Artikel" aria-label="Search" name="query" value="{{ request()->input('query') }}">
                    <div class="container">
                    </div>
                    <button type="submit" class="btn btn-primary ">Search</button>
                  </form>
                  <div class="row">
                    @foreach($articles as $article)
                    <div class="col-md-4 mb-4">
                      <div class="card h-100">
                        <div class="card-body">
                          <h5 class="card-title">{{ $article->title }}</h5>
                          <p class="card-text">{{ Str::limit($article->content, 150) }}</p>
                          <p><small>By {{ $article->author }} ({{ $article->year }})</small></p>
                          <p><small>Category: {{ $article->category }}</small></p>
                          <a href="#" class="btn btn-danger">Baca Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
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
  .table-responsive p {
      font-size: 1rem;
      margin: 1.5rem 0;
  }
  .table th, .table td {
      font-size: 0.875rem;
      vertical-align: middle;
  }
  .table th {
      text-align: center;
  }
  .btn-floating {
      font-size: 1.25rem;
      padding: 0.5rem 1rem;
  }
  .position-absolute {
      position: absolute !important;
  }
  .bottom-0 {
      bottom: 0 !important;
  }
  .start-50 {
      left: 50% !important;
  }
  .translate-middle-x {
      transform: translateX(-50%);
  }
  .m-3 {
      margin: 1rem !important;
  }
</style>
@endsection

