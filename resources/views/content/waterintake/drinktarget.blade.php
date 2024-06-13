@extends('layouts/contentNavbarLayout')

@section('title', 'Target Minum')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>

<script>
  function updateWaterIntake() {
    let target = document.getElementById('targetWater').value;
    let consumed = document.getElementById('consumedWater').value;

    if (target > 0 && consumed >= 0) {
      // Save the values to local storage
      localStorage.setItem('waterTarget', target);
      localStorage.setItem('waterConsumed', consumed);

      // Update the display
      document.getElementById('waterTarget').innerHTML = target + " ml";
      document.getElementById('waterConsumed').innerHTML = consumed + " ml";
      document.getElementById('waterRemaining').innerHTML = (target - consumed) + " ml";
    } else {
      alert("Please enter valid values for target and consumed water.");
    }
  }

  function loadWaterIntake() {
    let target = localStorage.getItem('waterTarget') || 0;
    let consumed = localStorage.getItem('waterConsumed') || 0;

    document.getElementById('waterTarget').innerHTML = target + " ml";
    document.getElementById('waterConsumed').innerHTML = consumed + " ml";
    document.getElementById('waterRemaining').innerHTML = (target - consumed) + " ml";
  }

  document.addEventListener('DOMContentLoaded', loadWaterIntake);
</script>
@endsection

<style>
  .background-text {
    background-color: #83B4FF;
    display: inline-flex;
    padding: 10px 20px;
    font-size: 20px;
    border-radius: 5px;
    font-family: 'Arial', sans-serif;
  }
  .background-container {
    text-align: center;
    margin-top: 20px;
  }
  .form-group label {
    font-weight: bold;
    font-family: 'Arial', sans-serif;
  }
  .card-container {
    max-width: 600px;
    margin: auto;
    background-color: #83B4FF;
    border-radius: 10px;
    padding: 20px;
  }
  .card-title {
    text-align: center;
    font-family: 'Arial', sans-serif;
  }
  .btn-custom {
    background-color: #AD88C6;
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
  }
  .btn-danger {
    background-color: #FF9EAA;
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
  }
  .button-group {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
</style>

@section('content')
<div class="container mt-5">
  @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

  @if(session('warning'))
      <div class="alert alert-warning">
          {{ session('warning') }}
      </div>
  @endif

  <div class="card card-container">
    <div class="card-body">
      <h5 class="card-title">Berikan Tubuhmu Yang Terbaik, Mulai dengan Air</h5>
      <p class="card-title">💧 Tambahkan target minum 💧</p>
      <form action="{{ route('water_intake_target.store') }}" method="POST">
        @csrf
        <div class="form-group pb-2">
          <label for="target_amount">Target Amount (ml)</label>
          <input type="number" class="form-control" id="target" name="target" value="{{ old('target', $target->target ?? '') }}" required>
        </div>
        <button type="submit" class="btn-custom">SIMPAN</button>
      </form>
    </div>
  </div>

  <div class="card card-container mt-5">
    <div class="card-body">
      <h5 class="card-title">Lacak Konsumsi Air Anda</h5>
      <div class="background-container">
        <p class="rounded background-text text-white"><strong>{{ $target->consumed ?? 0 }} / {{ $target->target ?? 'No target set' }} ml</strong></p>
        <h1 class="text-white"><strong>🥛</strong></h1>
      </div>
      <form action="{{ route('water_intake_target.updateConsumed') }}" method="POST">
          @csrf
          <div class="form-group pb-1">
              <label for="consumed">Add Consumed Amount (ml)</label>
              <input type="number" class="form-control" id="consumed" name="consumed" required>
          </div>
          <div class="button-group">
            <button type="submit" class="btn-custom" >UPDATE</button>
            <form action="{{ route('water_intake_target.resetConsumed') }}" method="POST" style="margin-left: 10px;">
                @csrf
                <button type="submit" class="btn btn-danger" style="background-color: #FF9EAA;">Reset</button>
            </form>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
