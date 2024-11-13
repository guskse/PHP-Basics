<?php
$number1 = 10;
$number2 = 5;
$number3 = '20';
$number4 = 0;
$word = 'apple';

//implicit conversion

$result = $number1 + $number2;
echo $result;
var_dump($result);
echo "<br />";

$result = $number1 + $number3;
echo $result;
var_dump($result);
echo "<br />";

$result = $number3 + $number3;
echo $result;
var_dump($result);
echo "<br />";

$result = $number3 . $number3;
echo $result;
var_dump($result);
echo "<br />";

$result = $number3 . $word;
echo $result;
var_dump($result);
echo "<br />";



//explicit conversion

$result = (string) $number1;
var_dump($result);

echo "<br />";
$result = (int) $number3;
var_dump($result);

echo "<br />";
$result = (bool) $number4;
var_dump($result)

?>