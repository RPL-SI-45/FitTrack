@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row gy-4 justify-content-center">
    <!-- Welcoming -->
    <div class="col-md-12 col-lg-8 text-center p-4">
        <h1 class="font-weight-bold text-black">Welcome To FitHealth!</h1>
        <p class="text-black">Track Your Health, Transform Your Life with FitHealth 💜</p>
    </div>
    <!--/ Welcoming -->

    <!-- Medication Reminder -->
    <div class="col-md-12 col-lg-12">
        <div class="card card-custom shadow-sm">
            <div class="card-header" style="background-color: #AD88C6;">
                <h5 class="card-title m-0 me-2" style="color: #ffff;">Medication Reminder</h5>
                <a href="{{ route('content.obat.index') }}" class="btn btn-sm btn-light">View All</a>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($obats as $obat)
                    <div class="col-md-6 mb-4">
                        <div class="card bg-light">
                            <div class="card-body text-black">
                                <h5 class="card-title">{{ $obat->nama_obat }}</h5>
                                <p class="card-text"><strong>Dosis:</strong> {{ $obat->dosis }}</p>
                                <p class="card-text"><strong>Jam Minum:</strong> {{ implode(', ', $obat->jam_minum) }}</p>
                                <p class="card-text"><strong>Aturan Minum:</strong> {{ $obat->aturan_minum }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--/ Medication Reminder -->

    <!-- Combined Cards Row -->
    <div class="col-md-12 col-lg-12">
        <div class="row">
            <!-- BMI Track -->
            <div class="col-md-4">
                <div class="card card-custom shadow-sm">
                    <div class="card-header" style="background-color: #FFD0D0;">
                        <h5 class="card-title m-0 me-2" style="color: #6c757d;">History BMI</h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row">
                            <div class="col">
                                <table class="table table-borderless text-center">
                                    <thead>
                                        <th>Height</th>
                                        <th>Weight</th>
                                        <th>BMI</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($bmiData as $d)
                                        <tr class="align-middle">
                                            <td><h6 class="mb-0">{{$d->height}}</h6></td>
                                            <td><h6 class="mb-0">{{$d->weight}}</h6></td>
                                            <td>
                                                <h6 class="mb-0">{{$d->bmi}}</h6>
                                                <p class="mb-0">{{$d->status}}</p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ BMI Track -->

            <!-- Calories Track -->
            <div class="col-md-4">
                <div class="card card-custom shadow-sm">
                    <div class="card-header" style="background-color: #FF9EAA;">
                        <h5 class="card-title m-0 me-2 text-white">Calories Today</h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row">
                            <div class="col">
                                <table class="table table-borderless text-center">
                                    <thead>
                                        <th>Food</th>
                                        <th>Calories</th>
                                    </thead>
                                    <tbody>
                                        @php $totalKalori = 0; @endphp
                                        @foreach ($foodTrack as $d)
                                            <tr class="align-middle">
                                                <td><h6 class="mb-0">{{$d->nama_menu}}</h6></td>
                                                <td><h6 class="mb-0">{{$d->kalori}}</h6></td>
                                            </tr>
                                            @php $totalKalori+= $d->kalori; @endphp
                                        @endforeach
                                        <tr class="align-middle">
                                            <td></td>
                                            <td><h6 class="mb-0" style="color: #343a40;"><b>Total: {{$totalKalori}}</b></h6></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Calories Track -->

            <!-- Water Intakes Track -->
            <div class="col-md-4">
                <div class="card card-custom shadow-sm">
                    <div class="card-header" style="background-color: #3AA6B9;">
                        <h5 class="card-title m-0 me-2 text-white">Drinking Target Today</h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row">
                            <div class="col">
                                <table class="table table-borderless text-center">
                                    <thead>
                                        <th>Consumed</th>
                                        <th>Target</th>
                                    </thead>
                                    <tbody>
                                        @php $total_consumed = 0; $total_target = 0; @endphp
                                        @foreach ($waterIntakeData as $d)
                                        <tr class="align-middle">
                                            <td><h6 class="mb-0">{{$d->consumed}}</h6></td>
                                            <td><h6 class="mb-0">{{$d->target}}</h6></td>
                                        </tr>
                                        @php $total_consumed += $d->consumed; $total_target += $d->target; @endphp
                                        @endforeach
                                        <tr class="align-middle">
                                            <td></td>
                                            <td><h6 class="mb-0" style="color: #343a40;"><b>Total: {{$total_consumed}}/{{$total_target}}</b></h6></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Water Intakes Track -->
        </div>
    </div>
    <!--/ Combined Cards Row -->
</div>
@endsection
