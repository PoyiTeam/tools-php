<?php

// $timezone = new DateTimeZone("ASIA/TAIPEI");
// $date = new DateTime("12/29/2023", $timezone);
$date = new DateTime("12/29/2023");
$date->setTimezone(new DateTimeZone("ASIA/TAIPEI"))->setDate(2023, 12, 29)->setTime(11, 19, 30);

echo "<pre>";
var_dump($date->format("Y m d H:i:s"));
echo "</pre>";


?>