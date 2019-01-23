<?php
// 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

$cities = [
  'Московская область' => ['Москва', "Зеленоград", "Клин"],
  'Санкт-Петербург' => ['Всеволжск', "Павловск", "Кронштад"],
];

function k_cities($regions) {
  foreach ($regions as $region => $cities) {
    foreach ($cities as $city) {
      if(iconv_substr($city, 0, 1) === 'К') echo $city . ' ';
    }
  }
}

k_cities($GLOBALS['cities']);