<?php
$url = 'https://api.openweathermap.org/data/3.0/onecall?appId=a6499df79e5975e3af09e06a8c12480e&lat=48.2085&lon=16.3721&units=metric';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response);

echo '#' . ceil($data->current->temp) . '°C,' . $data->current->weather[0]->main . ',' . ceil($data->daily[0]->temp->day) . '°C,' . $data->daily[0]->weather[0]->main;
