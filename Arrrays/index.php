<?php
require './vendor/autoload.php';
 $city = [
   [
    'name' => "Nairobi",
    'country' => 'Kenya',
    'population' => 5000000,
    'latitude' => 50.110924,
    'longitude' => 8.682127,
 ],
 [
    'name' => "Arusha",
    'country' => 'Tanzania',
    'population' => 6000000,
    'latitude' => 31.110924,
    'longitude' => 10.682127,
 ]
 ];
 //array Keys
 $keys = array_keys($city);
//  dd($keys);
 //array Values
 $values = array_values($city);
//  dd($values);
//Array Column
$country = array_column($city,'country');
// dd($country);
$name = "null";
dd($name ?? 'N/A');
 ?>