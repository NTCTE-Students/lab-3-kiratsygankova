<?php

$numbers = [5, 2, 9, 1, 5, 6];


sort($numbers);
echo "Массив в порядке возрастания: ". implode(", ",$numbers) . "\n";



rsort($numbers);
echo "Массив в порядке убывания: ". implode(", ",$numbers) . "\n";

?>