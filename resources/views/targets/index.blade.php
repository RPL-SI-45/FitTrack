@extends('layout')

@section('content')
    <h1>Targets</h1>
    <a href="{{ route('targets.create') }}">Create New Target</a>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <table>
        <tr>
            <th>Name</th>
            <th>Target Amount</th>
            <th>Actions</th>
        </tr>
        @foreach ($targets as $target)
        <tr>
            <td>{{ $target->name }}</td>
            <td>{{ $target->target_amount }}</td>
            <td>
                <a href="{{ route('targets.show', $target->id) }}">Show</a>
                <a href="{{ route('targets.edit', $target->id) }}">Edit</a>
                <form action="{{ route('targets.destroy', $target->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
