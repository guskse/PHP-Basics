<?php
$output = null;

//ASSOCIATIVE ARRAY (SIMILAR TO DICTIONARIES AND OBJECTS IN JAVASCRIPT)

$user = [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => '123456',
    'age' => 26,
    'hobbies' => ['Play the Guitar', 'Play video games', 'Gym']
];

echo $user["name"];
echo $user["password"];
echo $user["hobbies"][0];


//adding an element to the associative array
$user["address"] = '123 main street';
echo $user["address"];


//removing an element from the associative array
unset($user["address"]);


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
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <p>
                <pre>
                    <?php print_r($user) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>