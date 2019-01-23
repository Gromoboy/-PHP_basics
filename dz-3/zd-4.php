<?php
// Объявить массив, индексами которого являются буквы русского языка,
// а значениями – соответствующие латинские буквосочетания
// (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
//
//Написать функцию транслитерации строк.
 $trans = [
     'а'=>'a',
     'б'=>'b',
     'в'=>'v',
     'г'=>'g',
     'д'=>'d',
     'е'=>'e',
     'ё'=>'yo',
     'ж'=>'zh',
     'з'=>'z',
     'и'=>'i',
     'к'=>'k',
     'л'=>'l',
     'м'=>'m',
     'н'=>'n',
     'о'=>'o',
     'п'=>'p',
     'р'=>'r',
     'с'=>'s',
     'т'=>'t',
     'у'=>'u',
     'ч'=>'ch',
     'щ'=>'sch',
     'э'=>'eh',
     'ю'=>'yu',
     'я'=>'ya'
 ];

 function transString ($string) {
     global $trans;
     foreach ($trans as $cyr => $lat) {
         $string = str_replace($cyr, $lat, $string);
     }
    var_dump($string);
 };
 ?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
 <?
 transString('баба юля');
 ?>
</body>
</html>