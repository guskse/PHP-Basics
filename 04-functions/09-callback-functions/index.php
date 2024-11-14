<?php

$numbers_array = [1, 2, 3, 4, 5, 6];

$square = function ($number) {
    return $number * $number;
};

$squaredNumbers = array_map($square, $numbers_array);

// print_r($squaredNumbers);



//ANOTHER EXAMPLE OF CALLBACK FUNCTION
function applyCallback($callback, $value)
{
    return $callback($value);
}

$double = function ($number) {
    return $number * 2;
};


$result = applyCallback($double, 5);
echo $result;
