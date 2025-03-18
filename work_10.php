<?php

$tableData = [
    ['Животные', 'Имя', 'Окраска'],
    ['Кошка', 'Мурка', 'Серая'],
    ['Собака', 'Сириус', 'Белая'],
    ['Свинка', 'Вася', 'Розовая']
];

echo "<table border='1'>";

foreach ($tableData as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>