<?php
//5. Написать функцию, которая заменяет в строке пробелы на
// подчеркивания и возвращает видоизмененную строчку.
function snakize($text) {
    return str_replace(' ', '_', $text);
}
echo snakize('i got home too late');
echo '<br>';
echo snakize('Привет мои родные');