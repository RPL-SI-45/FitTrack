@extends('layouts/contentNavbarLayout')

@section('title', 'BMI Result')

@section('content')
<div class="row gy-4">
  <!-- BMI Result -->
  <div class="col-md-6">
    <div class="card border-0 shadow">
      <div class="card-header bg-primary text-white">
        <h5 class="card-title m-0">BMI Result</h5>
      </div>
      <div class="card-body">
        <!-- BMI result display -->
        <h2 class="text-primary">{{ request()->get('bmi') }}</h2>
        <p class="lead">Status: <span class="text-primary">{{ request()->get('status') }}</span></p>

        @if (request()->get('status') == 'Underweight')
          <p class="text-danger">Utamakan hidup sehat dan perhatikan konsumsi harian</p>
        @elseif (request()->get('status') == 'Normal weight')
          <p class="text-success">Pastikan asupan kalori sesuai dengan kebutuhan harian & konsumsi makanan sehat</p>
        @elseif (request()->get('status') == 'Overweight')
          <p class="text-warning">Perhatikan pola makan dan aktivitas fisik untuk mencapai berat badan ideal</p>
        @elseif (request()->get('status') == 'Obese')
          <p class="text-danger">Konsultasikan dengan ahli gizi untuk program penurunan berat badan yang sehat</p>
        @endif

        <!-- Re-check button -->
        <button type="button" class="btn btn-primary mt-3" onclick="window.location.href='{{ route('content.bmi.create') }}'">Check Again</button>
      </div>
    </div>
  </div>
  <!--/ BMI Result -->

  <!-- Other sections ... -->
</div>

<!-- Back Dashboard -->
<div class="layout-demo-wrapper mt-4">
    <button class="btn btn-secondary" type="button" onclick="history.back()">Back</button>
</div>
<!--/ Back Dashboard -->

@endsection
