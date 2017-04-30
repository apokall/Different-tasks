<?php

function getTimeAngle($hour,$minute) {

    if ($hour >= 24 || $minute >= 60) {
    echo "Incorrect value" . PHP_EOL;
    return;
    }

    if ($hour >= 12) {
      $hour = $hour - 12;
    }

    $answer = "Разница между стрелками: ";
    $angleHour = 30;
    $angleMinute = 6;
    $angleHourMinute = 0.5;

    $hour = $hour * $angleHour;

    $hour = $hour + $minute * $angleHourMinute;
    $minute = $minute * $angleMinute;

    if($hour > $minute) {
      echo $answer;
      echo $hour - $minute;
      return $hour - $minute;
    } else {
      echo $answer;
      echo $minute - $hour;
      return $minute - $hour;
    }
}
echo getTimeAngle(10,47).PHP_EOL;
echo getTimeAngle(0,15).PHP_EOL;
echo getTimeAngle(153,16);
