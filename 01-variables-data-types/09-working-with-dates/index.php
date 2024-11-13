<?php
$output = null;

date_default_timezone_set('America/Sao_Paulo'); //sets the timezone of the file


/*
- `Y` - The year
- `m` - The month
- `d` - The day
- `D` - The day of the week short name
- `l` - The full day of the week name
- `h` - The hour
- `i` - The minute
- `s` - The second
- `a` - AM / PM
*/

//get year
$output = date('Y'); //2024

//get year with timestamp
$output = date('Y', 936345600); //1999 time stamp

//get timestamp from strtotime
$output = date("D", strtotime("1996-01-08")); // monday

//get month
$output = date("m");

//get day of month in number
$output = date("d");

//get day short name abbreviation
$output = date("D");

//get day, month and year
$output = date("d - m - Y");


//TIME

//get hour
$output = date('h');

//get min
$output = date("i");


//get secs
$output = date("s");


//get am or pm
$output = date("a");


//put it all together
$output = date("d/m/Y h:i:s a D");


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
            <!-- Output -->
            <p class="text-xl"><?= $output; ?></p>
        </div>
    </div>
</body>

</html>