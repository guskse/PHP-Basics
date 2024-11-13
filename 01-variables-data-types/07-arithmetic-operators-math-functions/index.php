<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/


$output = null;

$num1 = 10;
$num2 = 20;

//BASIC MATH OPERATORS
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;


//ASSIGNMENT OPERATORS 
$num3 = 10;

// $num3 = $num3 + 20;
// $num3 += 20;

// $num3 = $num3 - 20;
// $num3 -= 20;

//$num3 = $num3 / 2;
// $num3 /= 2;


// $output = $num3;


//BUILT IN PHP FUNCTIONS

//rand() -> generate a random number
$output = rand();
$output = rand(1,10);  //random number from 1 to 10


//round() -> change the number to round;
$output = round(4.7);  //5
$output = round (4.2); //4


//ceil -> always round the number to the upper number
$output = ceil(5.3); //6


//floor -> always round the number to the lower number
$output = floor(5.9); // 5


//sqrt() -> get square root of value
$output = sqrt(64); //8

//pi -> get pi
$output = pi(); //3.14...

//abs -> get absolute number
$output = abs(-4.7); //4.7

//max -> get max value in an list or array of numbers
$output = max(10,5,1,2,3,100); //100
$output = max([10,5,1,2,3,200]); //200

//min -> get the min value in a list or array
$output = min(1,2,3,4,5,6); //1

//number_format -> format numbers like currency and etc...
$output = number_format(1234657.191234, 2, '.', ',')  //1,234,657.19


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>