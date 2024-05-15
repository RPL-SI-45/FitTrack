<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            background-color: #e9ecef;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }

        .profile-info {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-info h2 {
            color: #6DC5D1;
            font-size: 25px; /* Sesuaikan ukuran teks */
            margin-left: 8px;
        }

        img {
            width: 80px; /* Ubah ukuran foto profil */
            height: 80px; /* Ubah ukuran foto profil */
            margin-right: 10px;
        }

        .bmi-title {
            color: #4CAF50;
            font-size: 35px;
            margin-bottom: 20px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 20px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="bmi-title mb-4">BMI</h1>

        <div class="profile-info">
        <img src="<?php echo e(asset('img/atiyah.jpg')); ?>" alt="Your Photo" style="height: 85px; width: 85px; object-fit: cover; border-radius: 50%;">
        <p>Halo, Atiyah</p>
        </div>
        
        <form method="post" action="<?php echo e(route('bmi.calculate')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="text" id="weight" name="weight" class="form-control" placeholder="Weight (kg)" required>
            </div>
            <div class="form-group">
                <input type="text" id="height" name="height" class="form-control" placeholder="Height (cm)" required>
            </div>
            <div class="form-group">
                <input type="text" id="age" name="age" class="form-control" placeholder="Age" required>
            </div>
            <div class="form-group">
                <select id="activity_level" name="activity_level" class="form-control" required>
                    <option value="" disabled selected>Activity Level</option>
                    <option value="Minimum">Minimum</option>
                    <option value="Tidak">Tidak</option>
                    <option value="1-3x">1-3x</option>
                    <option value="3-4x">3-4x</option>
                    <option value="6-7x">6-7x</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH D:\github\FitTrack\resources\views/bmi/create.blade.php ENDPATH**/ ?>