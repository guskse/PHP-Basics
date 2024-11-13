<?php
$output = null;
$string = 'Hello world';


//BUILT IN STRING FUNCTIONS IN PHP

//strlen -> return length of string
$output = strlen($string);

//str_word_count -> gives word count
$output = str_word_count($string);


//strpos -> gives position of where the word starts
$output = strpos($string, "world");

//get specific character by index
$output = $string[4];

//substr -> gets the strings in the between positions passed (beginning and end)
$output = substr($string, 6, 5); //will get strings between 6 index of string and 5 characters

//str_replace -> replace string with the one passed
$output = str_replace('World','Universe', $string);

//strtolower -> turns string to lowercase
$output = strtolower($string);  //hello world

//strtoupper -> turns string to uppercase
$output = strtoupper($string); //HELLO WORLD

//ucwords -> turns only the first letter of the words to uppercase
$output = ucwords($string); //Hello World

//trim -> takes the empty space out before and after words
$output = trim("    trimming    ")


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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>