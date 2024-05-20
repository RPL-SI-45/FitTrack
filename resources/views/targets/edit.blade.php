@extends('layout')

@section('content')
    <h1>Edit Target</h1>
    <form action="{{ route('targets.update', $target->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $target->name }}" required>
        <label>Target Amount:</label>
        <input type="number" name="target_amount" value="{{ $target->target_amount }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
