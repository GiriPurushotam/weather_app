<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Weather Report</title>
    <link rel="stylesheet" href="assets/css/style.css">
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