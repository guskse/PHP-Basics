<?php
$firstName = 'John';
$lastName = 'Doe';

//concatenate variables with " . "
$fullName = $firstName . " " . $lastName;

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
      <h1 class="text-3xl font-semibold"><?= "Welcome Back, ", $fullName ?></h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <?= "Hello my name is " . $fullName . "<br />" ?>
      <?= "Hello my name is $fullName" ?>
    </div>
  </div>
</body>

</html>