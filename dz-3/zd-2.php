<?php

$output = '';
$number = 0;

do {
    $description = ' - ';
    if($number == 0) {
        $description .='это ноль<br>';
    } elseif ($number % 2 == 0) {
        $description .='это четное число<br>';
    } else {
        $description .='это нечетное число<br>';
    }
    $output .= $number . $description;
    $number++;
} while($number < 10);

$pageTitle = 'Дз-3 зд-2';
$docTitle = 'Задание № 2';
$exDescription = <<<EOT
С помощью цикла do…while написать функцию для вывода чисел от 0 до 10,<br>
чтобы результат выглядел так:<br>
<br>
0 – это ноль.<br>
1 – нечетное число.<br>
2 – четное число.<br>
3 – нечетное число.<br>
…<br>
10 – четное число.<br>
EOT;

$html = file_get_contents('template.html');
$html = str_replace('{page-title}', $pageTitle, $html);
$html = str_replace('{document-title}', $docTitle, $html);
$html = str_replace('{exercise-description}', $exDescription, $html);
$html = str_replace('{output}', $output, $html);

echo $html;
