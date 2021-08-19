<?php

    $city_name = $_GET["cn"];
    $temperature_description = $_GET["td"];
    $temperature_main = $_GET["tm"];
    $temperature_icon = $_GET["ti"];
    $temperature_in_celsius = $_GET["tic"];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/display.css?v=<?php echo time();?>">
    <title>Display Data From Open Weather</title>
</head>
<body>
    
    <?php
        echo "<div class='wrapper'>";
        echo "<h1>Weather Data for $city_name</h1>";

        echo "<div>$city_name</div>";
        echo "<div>$temperature_in_celsius</div>";
        echo "<div>$temperature_main</div>";
        echo "<div>$temperature_description</div>";
        // Api image link gotten from https://openweathermap.org/weather-conditions
        echo "<div><img src='http://openweathermap.org/img/wn/".$temperature_icon."@2x.png'></div>";
        echo "</ div>";
        echo "<a href='index.php'>Go Back<a/>"
        ?>

</body>
</html>