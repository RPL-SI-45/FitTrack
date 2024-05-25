@include('layout.app', ['class' => 'd-flex flex-column min-vh-100'])
@include('layout.navbar')

    <h1>Food Track Details</h1>
    <p>Food Item: {{ $foodTrack->food_item }}</p>
    <p>Meal Time: {{ $foodTrack->meal_time }}</p>
    <p>Meal Date: {{ $foodTrack->meal_date }}</p>
    <a href="{{ route('food_tracks.edit', $foodTrack->id) }}">Edit</a>
    <form action="{{ route('food_tracks.destroy', $foodTrack->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <br>
    <a href="{{ route('food_tracks.index') }}">Back to List</a>
    @include('layout.footer')