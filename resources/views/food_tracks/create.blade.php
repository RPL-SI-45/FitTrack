@include('layout.app', ['class' => 'd-flex flex-column min-vh-100'])
@include('layout.navbar')

<div class="container mt-5 d-flex justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center">Create Food Track</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('food_tracks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="food_item">Food Item:</label>
                <input type="text" name="food_item" id="food_item" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="meal_time">Meal Time:</label>
                <select name="meal_time" id="meal_time" class="form-control" required>
                    <option value="Sarapan">Sarapan</option>
                    <option value="Makan Siang">Makan Siang</option>
                    <option value="Makan Malam">Makan Malam</option>
                </select>
            </div>
            <div class="form-group">
                <label for="meal_date">Meal Date:</label>
                <input type="date" name="meal_date" id="meal_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </form>
    </div>
</div>

@include('layout.footer')
