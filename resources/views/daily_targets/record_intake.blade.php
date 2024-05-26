<!DOCTYPE html>
<html>
<head>
    <title>Record Daily Intake</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Record Daily Intake</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('daily_targets.storeIntake', $dailyTarget->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Amount (mL):</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" value="{{ $dailyTarget->date }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
