@extends('layouts/contentNavbarLayout')

@section('title', 'BMI Result')

@section('content')
<div class="row gy-4 justify-content-center align-items-center" style="height: 50vh;">
  <!-- BMI Result -->
  <div class="col-md-10 col-lg-8">
    <div class="card border-0 shadow">
      <div class="card-header text-white text-center" style="background-color: #83B4FF;">
        <h5 class="card-title m-0" style="color: #ffffff;">Hasil BMI</h5>
      </div>
      <div class="card-body">
        <!-- BMI result display -->
        <h2 class="text-primary text-center">{{ request()->get('bmi') }}</h2>
        <h3 class="lead text-center"><span class="text-primary">{{ request()->get('status') }}</span></h3>

        @if (request()->get('status') == 'Underweight')
          <h5 class="text-danger text-center">Utamakan hidup sehat dan perhatikan konsumsi harian</h5>
        @elseif (request()->get('status') == 'Normal weight')
          <h5 class="text-success text-center" style="color: #AD88C6;">Pastikan asupan kalori sesuai dengan kebutuhan harian & konsumsi makanan sehat</h5>
        @elseif (request()->get('status') == 'Overweight')
          <h5 class="text-warning text-center">Perhatikan pola makan dan aktivitas fisik untuk mencapai berat badan ideal</h5>
        @elseif (request()->get('status') == 'Obese')
          <h5 class="text-danger text-center">Konsultasikan dengan ahli gizi untuk program penurunan berat badan yang sehat</h5>
        @endif

        <!-- Re-check button -->
        <div class="text-center mt-3">
          <button type="button" class="btn btn-primary" style="background-color: #83B4FF;" onclick="window.location.href='{{ route('content.bmi.create') }}'">Check Again</button>
        </div>
      </div>
    </div>
    <div class="layout-demo-wrapper mt-4">
      <button class="btn btn-secondary" type="button" onclick="history.back()">Back</button>
    </div>
  </div>
  <!--/ BMI Result -->

</div>

@endsection
