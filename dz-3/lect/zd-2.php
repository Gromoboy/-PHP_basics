<?php
// 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10,
// чтобы результат выглядел так:

//   0 – это ноль.
//   1 – нечетное число.
//   2 – четное число.
//   3 – нечетное число.
//   …
//   10 – четное число.
$num = 0;
echo "$num - это ноль." . PHP_EOL;
do {
  echo ++$num . ' - нечетное число' . PHP_EOL;
  echo ++$num . ' - четное число' . PHP_EOL;
} while ($num < 10);