<?php

class MathUtility
{
    public static $pi = 3.14;

    public static function add(...$numbers)
    {
        return array_sum($numbers);
    }
}


echo MathUtility::$pi;   //accessing static property of a class

echo MathUtility::add(1, 2, 3, 4, 5); //calling a static function from a class
