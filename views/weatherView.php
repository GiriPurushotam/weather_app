<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Weather Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 2rem;
        }

        .weather-container {
            background: #fff;
            border-radius: 8px;
            padding: 2rem;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            text-align: center;
        }

        .weather-data p {
            margin: 0.5rem 0;
        }
    </style>
</head>

<body>

    <div class="weather-container">
        <h2>Weather in <?= htmlspecialchars($weatherData['city']) ?></h2>

        <?php if (!empty($weatherData['error'])): ?>
            <p style="color: red;"><?= htmlspecialchars($weatherData['error']) ?></p>
        <?php else: ?>
            <div class="weather-data">
                <p><strong>Temperature:</strong> <?= htmlspecialchars($weatherData['temp']) ?> °C</p>
                <p><strong>Description:</strong> <?= htmlspecialchars($weatherData['description']) ?></p>
                <p><strong>Humidity:</strong> <?= htmlspecialchars($weatherData['humidity']) ?>%</p>
                <p><strong>Wind Speed:</strong> <?= htmlspecialchars($weatherData['wind_speed']) ?></p>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>