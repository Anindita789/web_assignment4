<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>5-Day Weather Forecast</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Weather Forecast</h1>
        </div>
    </header>
    
    <div class="main-content">
        <div class="container">
            <form method="POST" action=>
                <label for="city">Enter City:</label>
                <input type="text" id="city" name="city" required>
                <button type="submit">Get Forecast</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Weather App</p>
        </div>
    </footer>
</body>
</html>
