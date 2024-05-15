<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Changed font family */
            background: linear-gradient(45deg, #FDFFC2, #A3D8FF);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-info {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-info img {
            width: 50px; /* Adjusted Profile image size */
            height: 50px; /* Adjusted Profile image size */
            margin-right: 10px;
            border-radius: 50%; /* Make the image circular */
        }

        .profile-info p {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

        .slogan {
            color: #666;
            font-size: 16px;
            margin-top: 10px;
            text-align: center; /* Center the slogan */
        }

        .bmi-title {
            color: #FF76CE;
            font-size: 35px;
            margin-bottom: 20px;
            text-align: center; /* Center the title */
            width: 100%; /* Full width */
            font-weight: bold; /* Bold title */
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
            background-color: #A3D8FF; /* Updated button color */
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
            background-color: #0056b3;
        }

        p {
            margin-top: 20px;
            color: #666;
            font-weight: bold; /* Bold the footer slogan */
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="bmi-title mb-4">BMI</h1>

        <div class="profile-info">
            <img src="{{ asset('img/atiyah.jpg') }}" alt="Your Photo" class="profile-img">
            <p>Halo, Atiyah</p>
        </div>
        <p class="slogan">Measure, know, and make changes</p>

        <form method="post" action="{{ route('bmi.calculate') }}">
            @csrf
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
        <p class="slogan mt-3">Track your health, transform your life with FitHealth</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
