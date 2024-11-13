<?php

$output = null;

//Accessing an array inside an array

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];


$output =  $fruits[0][0];
$output =  $fruits[1][0];
$output =  $fruits[2][1];

//adding a value to the array
$fruits[] = ['Grape', 'Purple'];


//another associative array
$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456'],
  ['name' => 'Mac', 'email' => 'mac@gmail.com', 'password' => '123456'],
  ['name' => 'Jack', 'email' => 'jack@gmail.com', 'password' => '123456'],
]; 

$output = $users[1]["email"];


//adding users to the array:
// way 1 of adding elements to the array:
$users[] = ['name' => 'Lulu', 'email' => 'lulu@gmail.com', 'password' => '123456'];


//way 2 of adding elements to the array:
array_push($users, ['name' => 'Larry', 'email' => 'larry@gmail.com', 'password' => '123456'],);


//removing the last user of array
array_pop($users);


//removing the first user of array
array_shift($users);


//remove specific user by index
unset($users[1]); //will remove user at index 1


//count the number of remaining users
$output = count($users);


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
      <p class="text-xl"><?= "OUTPUT: " . $output ?></p>
      <p>
        <pre>
          <?php print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>