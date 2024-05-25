@include('layout.app', ['class' => 'd-flex flex-column min-vh-100'])
@include('layout.navbar')
    <h1>Edit Food Track</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('food_tracks.update', $foodTrack->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="food_item">Food Item:</label>
        <input type="text" name="food_item" id="food_item" value="{{ $foodTrack->food_item }}" required>
        <br>
        <label for="meal_time">Meal Time:</label>
        <select name="meal_time" id="meal_time" required>
            <option value="Sarapan" {{ $foodTrack->meal_time == 'Sarapan' ? 'selected' : '' }}>Sarapan</option>
            <option value="Makan Siang" {{ $foodTrack->meal_time == 'Makan Siang' ? 'selected' : '' }}>Makan Siang</option>
            <option value="Makan Malam" {{ $foodTrack->meal_time == 'Makan Malam' ? 'selected' : '' }}>Makan Malam</option>
        </select>
        <br>
        <label for="meal_date">Meal Date:</label>
        <input type="date" name="meal_date" id="meal_date" value="{{ $foodTrack->meal_date }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
    @include('layout.footer')
