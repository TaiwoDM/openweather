<?php

    require_once("vendor/autoload.php");
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load(); 

    if(isset($_POST["submit"])){
        $country = $_POST["country"];

        header("location: process.php?country=$country");
    }
    
    if(isset($_GET["country"])){

        $country = $_GET["country"];

        // Name of the city whose weather report we want to get and this will be passed into the api url
        $city_name = $country;

        // api key gotten from my account with openweather with username tdmayowa and password t************* and urlhttps://home.openweathermap.org/api_keys
        $api_key = $_ENV["API_KEY"];

        // The api key
        $api_url = "https://api.openweathermap.org/data/2.5/weather?q=" . $city_name . "&appid=" . $api_key;

        $weather_data = json_decode(file_get_contents($api_url), true);

        $temperature = $weather_data["main"]["temp"];
        $temperature_in_celsius = $temperature - 273;

        $temperature_main = $weather_data["weather"][0]["main"];
        $temperature_description = $weather_data["weather"][0]["description"];
        $temperature_icon = $weather_data["weather"][0]["icon"];
        $city_name = $weather_data["name"];

        header("location: display.php?cn=$city_name&&tic=$temperature&&tm=$temperature_main&&td=$temperature_description&&ti=$temperature_icon");
    }

    ?>