<?php

$a = 3;
$b = 7;
$h = 4;

$s = (($a + $b) / 2) * $h;

echo $s . "\n";


$int = 541967;

$num1 = substr($int, 0, 2);
$num2 = substr($int, 2, 2);
$num3 = substr($int, 4, 2);
$one = substr($int, 0, 3);
$two = substr($int, 3, 3);


$sum = $num1 + $num2 + $num3;
$mult = $one * $two;


echo $sum . "\n";
echo $mult . "\n";


$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis dolor massa ut, interdum nisl.';

$text = mb_strtolower($text);
$text = str_replace('dolor' , '<i>dolor</i>', $text);

echo "<ol><li>" . str_replace('. ', ';</li><li>', $text) . "</li></ol>" . "\n";