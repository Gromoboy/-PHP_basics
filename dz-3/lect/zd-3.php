<?php
// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:

//     Московская область:
//     Москва, Зеленоград, Клин
//     Ленинградская область:
//     Санкт-Петербург, Всеволожск, Павловск, Кронштадт

$region = [
  'Московская область' => ['Москва', "Зеленоград", "Клин"],
  'Санкт-Петербург' => ['Всеволжск', "Павловск", "Кронштад"],
];
foreach ($region as $key => $val) {
  echo "$key".PHP_EOL;
  echo implode(', ', $val) . PHP_EOL;
}