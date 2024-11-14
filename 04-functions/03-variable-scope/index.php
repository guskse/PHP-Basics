<?php

//Global Scope (outside functions)
$name = "Alice";
echo $name;
echo "<br />";


function sayHello()
{
    global $name;  // <- to use a global function inside the local scope, need to declare
    //local scope
    echo "Say hello, " . $name;
    echo "<br />";
}

sayHello();



function sayGoodbye()
{
    //local scope
    $names = ['Jack', 'Jill']; // <- only exists inside the function
    echo "Hello, " . $names[0];
    echo "<br />";
}

sayGoodbye();
