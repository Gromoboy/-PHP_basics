<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Homework 2 ex.3</title>
</head>
<body>
    <h1>Домашняя работа № 2</h1>
    <h2>Задание 2</h2>
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
    <h2>Задание №3</h2>
    <h3> Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),<br>
        где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.<br>
        В зависимости от переданного значения операции выполнить одну из арифметических операций<br>
        (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
    </h3>
    <?php
        function mathOperation($arg1, $arg2, $operation) {
            switch ($operation) {
                case '*':
                    return $arg1 * $arg2;
                case '/':
                    return $arg1 / $arg2;
                case '-':
                    return $arg1 - $arg2;
                case '+':
                    return $arg1 + $arg2;
            }
        }

        echo '2*2 = ' . mathOperation(2,2,'*') . '<br>';
        echo '2/2 = ' . mathOperation(2,2,'/') . '<br>';
        echo '2-2 = ' . mathOperation(2,2,'-') . '<br>';
        echo '2+2 = ' . mathOperation(2,2,'+') . '<br>';
    ?>
</body>
</html>