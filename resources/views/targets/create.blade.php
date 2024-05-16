@extends('layout')

@section('content')
    <h1>Create New Target</h1>
    <form action="{{ route('targets.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Target Amount:</label>
        <input type="number" name="target_amount" required>
        <button type="submit">Save</button>
    </form>
@endsection
