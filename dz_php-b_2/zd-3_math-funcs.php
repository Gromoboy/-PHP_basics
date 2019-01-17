<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Homework 2 ex.3</title>
</head>
<body>
    <h1>Задание №3</h1>
    <h3>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.<br>
        Обязательно использовать оператор return.</h3>
    <?php
        function productPair ($a, $b) {
            return $a * $b;
        }
        function addPair ($a, $b) {
            return $a + $b;
        }
        function substractPair ($a, $b) {
            return $a - $b;
        }
        function divPair ($a, $b) {
            return $a / $b;
        }

        echo ' 3-2=' . substractPair(3,2) . '<br>';
        echo '-2+3=' . addPair(-2, 3) . '<br>';
        echo ' 1*1=' . productPair(1,1) . '<br>';
        echo ' 9/9=' . divPair(9, 9) . '<br>';

    ?>
</body>
</html>