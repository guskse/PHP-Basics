<?php

function sayHello()
{
    echo "hello";
}


function sayGoodbye()
{
    return "goodbye";
}


sayHello();

$goodbye = sayGoodbye();
echo $goodbye;
