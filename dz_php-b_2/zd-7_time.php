<?php

    const MOSCOW_TIME_ZONE_DIFF = 3;

    function getCurrentTime() {
        $timeString = '';
        $hour = date('H') + MOSCOW_TIME_ZONE_DIFF;
        $minutes = date('i');
//        $hour = 23;
        $timeString += $hour;
        $lastDigit = $hour % 10;
        switch ($lastDigit) {
            case 0:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                $timeString .= ' часов ';
                break;
            case 1:
                $timeString .= ' час ';
                break;
            case 2:
            case 3:
            case 4:
                $timeString .= ' часа ';
                break;
        }
//        $minutes =20;
        $timeString .= $minutes;
        $lastDigit = $minutes % 10;

        switch ($lastDigit) {

            case 0:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                $timeString .= ' минут.';
                break;
            case 1:
                $timeString .= ' минута.';
                break;
            case 2:
            case 3:
            case 4:
                $timeString .= ' минуты.';
                break;
        }

        return  $timeString ;
    }
    $timeTablo = getCurrentTime();
echo <<<html
<html>
<head>
<meta charset="utf-8">
<title>Др-2 зд-7</title>
</head>
<body>
<h1>Задание 7*</h1>
<h2>*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями,<br>
 например:<br>
 22 часа 15 минут<br>
 21 час 43 минуты
 </h2>
 <p>$timeTablo</p>
</body>
</html>
html;
