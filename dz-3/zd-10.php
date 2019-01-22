<?php
//10. *Вывести при помощи 2х циклов for таблицу умножения, в углу таблицы должен стоять 0.
echo '<table>';
for($x = 1; $x<10; $x++) {
    echo "<tr>";
    for ($y = 1; $y < 10; $y++) {
        $prod = $y * $x;
        if ($prod == 1) {
            echo '<td>0</td>';
            continue;
        }
        echo "<td>$prod</td>";
    }
    echo "</tr>";
}
echo '<table';