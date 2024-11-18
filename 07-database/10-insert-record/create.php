<?php
require 'database.php';

//check if its a post request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

  //get the data that is being passed in the form
  //htmlspecialchars will make it impossible to pass code through the form inputs
  $title = htmlspecialchars($_POST['title']);
  $body = htmlspecialchars($_POST['body']);


  //create a sql query
  $sql = 'INSERT INTO post (title, body) VALUES (:title, :body)';  //:title and :body are placeholders

  $stmt = $pdo->prepare($sql);

  //will substitute the placeholders with actual values from the retrieved data from form
  $params = [
    'title' => $title,
    'body' => $body
  ];

  //execute the query
  $stmt->execute($params);

  //redirect to index page.
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Blog Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Blog Post</h1>
      <form method="post">
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter post title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-6">
          <label for="body" class="block text-gray-700 font-medium">Body</label>
          <textarea id="body" name="body" placeholder="Enter post body" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Submit
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>