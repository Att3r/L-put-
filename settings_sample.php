<?php 
//Andmebaasi ühendused
define("HOST", "localhost"); // Serveri nimi
define("USERNAME", ""); // Kasutajanimi
define("PASSWORD", ""); // PHP Myadmin parool
define("DBNAME", ""); // Andmebaasi nimi

$dsn = "mysql:host=".HOST.";dbname=".DBNAME;
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

//Wheater info
$lat = 58.924888;
$lon = 24.868806;
$key = '71d1670005020e95c346545375cbad22';

function show($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$json_string = file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&appid=$key&units=metric");
$weather = json_decode($json_string);
$test  = array($weather);

$myDate = date('d.m.Y H:i:s');

$icon = $test[0]->weather[0]->icon;
$image = 'https://openweathermap.org/img/wn/' . $icon . '@2x.png';
$imageData = base64_encode(file_get_contents($image));

$sunrise = date('H:i:s', $test[0]->sys->sunrise);
$sunset = date('H:i:s', $test[0]->sys->sunset);

//Hourly forecast
$json_string2 = file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&appid=$key&units=metric");
$forecast = json_decode($json_string2);
$forecast  = array($forecast);

$icon = $forecast[0]->hourly[0]->weather[0]->icon;
$image = 'https://openweathermap.org/img/wn/' . $icon . '@2x.png';
$imageData = base64_encode(file_get_contents($image));
 
$fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[0]->dt);