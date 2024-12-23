<?php

//this is a php single line comment

/* this is a multiple line comment in php
*/

$title = 'Learn php from scratch with a variable';
$heading = 'Welcome to the course!';
$body = 'In this course, we will learn all kinds of php stuff!';


echo $title;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $heading ?></h2>
            <?= $body ?>
        </div>
    </div>
</body>

</html>