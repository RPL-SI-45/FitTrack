<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        img {
            border-radius: 50%;
            margin-bottom: 20px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
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
        <h1>BMI</h1>    
        <!-- Foto Diri -->
        <img src="..." alt="Your Photo" width="150">

      
        <!-- Pastikan variabel $name sudah diset di dalam controller dengan nama pengguna yang sesuai -->
        <p>Halo Atiyah</p>

        <form method="post" action="{{ route('bmi.calculate') }}">
            @csrf
            <label>Weight (kg):</label><br>
            <input type="text" name="weight" required><br>
            <label>Height (cm):</label><br>
            <input type="text" name="height" required><br>
            <label>Age:</label><br>
            <input type="text" name="age" required><br>
            <label>Activity Level:</label><br>
            <select name="activity_level" required>
                <option value="Minimum">Minimum</option>
                <option value="Tidak">Tidak</option>
                <option value="1-3x">1-3x</option>
                <option value="3-4x">3-4x</option>
                <option value="6-7x">6-7x</option>
            </select><br><br>
            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>
