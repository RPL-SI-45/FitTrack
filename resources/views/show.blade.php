<!DOCTYPE html>
<html>
<head>
    <title>Show Daily Target</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Show Daily Target</h1>
        
        <div class="card">
            <div class="card-header">
                <h2>{{ $dailyTarget->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Target Amount:</strong> {{ $dailyTarget->target_amount }}</p>
                <p><strong>Date:</strong> {{ $dailyTarget->date }}</p>
                <p><strong>Total Intake:</strong> {{ $dailyTarget->dailyIntakes->sum('amount') }} mL</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('daily_targets.recordIntake', $dailyTarget->id) }}" class="btn btn-primary">Record Intake</a>
                <a href="{{ route('daily_targets.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>

        <h2>Intake Records</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Amount (mL)</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dailyTarget->dailyIntakes as $intake)
                    <tr>
                        <td>{{ $intake->amount }}</td>
                        <td>{{ $intake->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
