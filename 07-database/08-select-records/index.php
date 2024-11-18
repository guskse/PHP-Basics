<?php
require 'database.php';

// prepare a SELECT statement
//statement
$stmt = $pdo->prepare('SELECT * FROM post');  //$pdo comes from the database.php imported above

//execute the statement
$stmt->execute();

//Fetch the results
$results = $stmt->fetchAll(); //for getting multiple records use fetchAll();

// echo '<pre>';
// var_dump($results);
// echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Blog</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <!-- loop through all the results in the php query  -->
    <?php foreach ($results as $post): ?>
      <div class="md my-4">
        <div class="rounded-lg shadow-md">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $post["title"] ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $post["body"] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <!-- end of php -->
     
  </div>
</body>

</html>