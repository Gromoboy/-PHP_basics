<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Др 1</title>
</head>
<body>
<h1>Задание №1</h1>
<?php
//  1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//
//    если $a и $b положительные, вывести их разность;
//    если $а и $b отрицательные, вывести их произведение;
//    если $а и $b разных знаков, вывести их сумму;
//
//  Ноль можно считать положительным числом.

    $a = random_int(-10, 10);
    $b = random_int(-10, 10);
    echo "a = $a <br> b = $b <br>";

    if ($a < 0 and $b < 0) {

        echo 'результат умножения = ' . ($a * $b);
    }
    elseif ($a >= 0 and $b >= 0) {
        echo 'результат разности = ' . ($a - $b);
    }
    else {
        echo 'результат сложения = ' . ($a + $b);
    }
?>
</body>

</html>

