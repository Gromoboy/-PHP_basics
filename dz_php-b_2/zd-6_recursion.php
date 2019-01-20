<?php

    function power($val, $pow) {
        if ($pow === 1) return $val;
        return $val * power($val, --$pow);
    }
    $first = power(1, 2);
    $second = power(2, 2);
    $third = power(3,3);
echo <<<html
<html>
<head>
<meta charset="utf-8">
<title>Дз-2 зд-6*</title>
</head>
<body>
<h1>Задание №6*</h1>
<h3>*С помощью рекурсии организовать функцию возведения числа в степень.<br>
 Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</h3>
 <p>1<sup>2</sup>= $first</p>
     <p>2<sup>2</sup>= $second</p>
     <p>3<sup>3</sup>= $third</p>
</body>
</html>
html;

