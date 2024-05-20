<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambahkan Makanan</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Error:</strong> Ada masalah dengan inputanmu.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('food.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nama Makanan:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="calories">Jumlah Kalori:</label>
                            <input type="text" name="calories" id="calories" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambahkan Makanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>