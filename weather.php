<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = $_POST["city"];
    
    // Replace 'YOUR_API_KEY' with your OpenWeatherMap API key
    $apiKey = 'lat=44.34&lon=10.99&appid';
    $apiUrl = "https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=$apiKey";

    // Fetch data from OpenWeatherMap API
    $weatherData = file_get_contents($apiUrl);
    $weatherJSON = json_decode($weatherData, true);

    // Display the forecast
    if ($weatherJSON && isset($weatherJSON['list'])) {
        echo '<div class="container">';
        echo '<h2>Weather Forecast for ' . $weatherJSON['city']['name'] . '</h2>';
        echo '<div class="forecast">';
        
        foreach ($weatherJSON['list'] as $forecast) {
            $date = date('Y-m-d H:i:s', $forecast['dt']);
            $temperature = round($forecast['main']['temp'] - 273.15);
            $weatherDescription = ucfirst($forecast['weather'][0]['description']);
            $weatherIcon = $forecast['weather'][0]['icon'];

            echo '<div class="forecast-item">';
            echo '<p class="date">' . $date . '</p>';
            echo '<img class="weather-icon" src="http://openweathermap.org/img/w/' . $weatherIcon . '.png" alt="Weather Icon">';
            echo '<p class="temperature">' . $temperature . '°C</p>';
            echo '<p class="description">' . $weatherDescription . '</p>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
    } else {
        echo '<p class="error">Error fetching weather data. Please try again.</p>';
    }
}
?>
