<?php

//FUNCTION WITH ARGUMENTS
function add($n1, $n2)
{
    echo $n1 + $n2;
}

add(100, 200);
echo "<br />";
add(300, 300);
echo "<br />";


// WITH A DEFAULT PARAMETER
function sayHello($name = "world")
{
    return "Hello " . $name;
}


echo sayHello();
echo "<br />";
echo sayHello("Gus");
echo "<br />";


//WITH SPREAD OPERATOR
function addAll(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}


echo addAll(1, 2, 3, 4, 5);
