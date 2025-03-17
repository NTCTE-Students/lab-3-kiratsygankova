<?php

$inputString = "i love cat";


$wordsArray = explode(" ", $inputString);


echo "Массив слов: ". implode(", ",$wordsArray) . "\n";
?>