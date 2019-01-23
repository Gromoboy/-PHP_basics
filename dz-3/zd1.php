<?php
$output = '';
$number = 0;
while ($number < 100) {
    if ($number % 3 === 0) $output .= $number . ' ';
    ++$number;
}

$pageTitle = 'Дз-3 зд-1';
$docTitle = 'Задание № 1';
$exDescription = <<<EOT
С помощью цикла while  вывести все числа в промежутке от 0 до 100,
которые делятся на 3 без остатка.
EOT;

$html = file_get_contents('template.html');
$html = str_replace('{page-title}', $pageTitle, $html);
$html = str_replace('{document-title}', $docTitle, $html);
$html = str_replace('{exercise-description}', $exDescription, $html);
$html = str_replace('{output}', $output, $html);

echo $html;
