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
            </div>
            <div class="card-footer">
                <a href="{{ route('daily_targets.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
