<?php

declare(strict_types=1); //makes the code be strict, typed.


//function below accepts int as arguments, and returns int value as well.
function getSum(int $a, int $b): int
{
    return $a + $b;
}

// echo getSum(2, "2");  // -> error, expects interger as arguments and not string
echo getSum(2, 2); // correct, the two arguments are int values

echo "<br />";



//function bellow accepts string as argument, and return string
function greeting(string $name): string
{
    return "Hello, " . $name;
}

echo greeting("gus");

echo "<br />";


//function bellow accepts string as argument, and returns nothing (void);
function greetingWithNoReturn(string $name): void
{
    echo "hello, " . $name;
}

echo greetingWithNoReturn("gus");
