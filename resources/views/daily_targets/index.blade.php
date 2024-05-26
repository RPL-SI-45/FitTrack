<!DOCTYPE html>
<html>
<head>
    <title>Daily Targets</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Daily Targets</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('daily_targets.create') }}" class="btn btn-primary">Create Daily Target</a>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Target Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dailyTargets as $target)
                    <tr>
                        <td>{{ $target->name }}</td>
                        <td>{{ $target->target_amount }}</td>
                        <td>{{ $target->date }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </form>
    </div>
</body>
</html>
         
