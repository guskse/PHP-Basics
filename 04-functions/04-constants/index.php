<?php

//CONSTANTS CANNOT CHANGE AFTER DEFINING THEM.

//DEFINING CONSTANTS
define("APP_NAME", "My App");

define("APP_VERSION", "1.0.0");

echo APP_NAME;
echo "<br />";
echo APP_VERSION;


//ANOTHER WAY WITH CONST
const DB_NAME = 'mydb';
const DB_HOST = 'myhost';

echo "<br />";
echo DB_NAME;
echo "<br />";
echo DB_HOST;
echo "<br />";
echo "<hr />";



//Constants are global, can be used by all functions and scopes, example:
function run()
{
    //local scope
    echo "running program...";
    echo "<br />";
    echo APP_NAME; //will have access to the constant inside the function.
    echo "<br />";
    echo DB_NAME, DB_HOST; //will have access to the constant inside the function.
}


run();

?>