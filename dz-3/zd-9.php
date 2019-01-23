<?php

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
     'ы'=>'y',
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
    return ($string);
 };

function snakize($text) {
    return str_replace(' ', '_', $text);
}
$output = snakize(transString('давным давно жили-были'));
echo <<<EOH
<html>
<head>
<title>Др-3 зд-9</title>
</head>
<body>
<h1>Задание № 9</h1>
<h3>9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке,<br>
 производит транслитерацию и замену пробелов на подчеркивания<br>
  (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).</h3>
  <p> $output</p>
</body>
</html>
EOH;


