<?php

//ANONYM FUNCTION EXAMPLE
$square = function ($number) {
    return $number * $number;
};


$result = $square(5);
echo $result;



//CLOSURE EXAMPLE   
function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) {
        return ++$count;
    };

    return $counter;
}


$counter = createCounter();

echo ('<br>');
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
