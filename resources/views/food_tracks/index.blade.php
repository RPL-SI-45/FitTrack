@include('layout.app', ['class' => 'd-flex flex-column min-vh-100'])
@include('layout.navbar')

<div class="container mt-5">
    <h1 class="text-center">Food Tracks</h1>
    <div class="text-center mb-4">
        <a href="{{ route('food_tracks.create') }}" class="btn btn-success">Create New Food Track</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Food Item</th>
                    <th>Meal Time</th>
                    <th>Meal Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foodTracks as $foodTrack)
                    <tr>
                        <td>{{ $foodTrack->food_item }}</td>
                        <td>{{ $foodTrack->meal_time }}</td>
                        <td>{{ $foodTrack->meal_date }}</td>
                        <td>
                            <a href="{{ route('food_tracks.edit', $foodTrack->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('food_tracks.destroy', $foodTrack->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    @include('layout.footer')
