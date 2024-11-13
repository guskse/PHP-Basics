<?php
$output = null;

$ids = [10, 2, 3, 8, 9];
$users = ['user5', 'user2', 'user1', 'user4'];


//ARRAY BUILT IN FUNCTIONS IN PHP

//count -> counts the number of elements in an array
$output = count($ids);


//sort -> sort the order of array
sort($ids);
sort($users);

//rsort -> reverse sort
rsort($ids);
rsort($users);

//array_push -> add element to end of array
array_push($ids, 100);
array_push($users, "user_71");

//array_pop -> remove from end of array
array_pop($ids);
array_pop($users);

//array_shift -> remove element from beginning of array
array_shift($ids);
array_shift($users);

//array_unshift -> add element to beginning of array
array_unshift($ids, 255);
array_unshift($users, "user255");

//array_slice ->  return part of the array as new array
$ids2 = array_slice($ids, 0, 2);

//array_splice -> return a portion of the array and replace it with something else
// array_splice($ids, 3, 1, "new id"); //will change the value at index 3 to "new id"
// array_splice($users, 0, 1, "New User");


//array_sum -> add everything in the array and returns
$output = 'Sum of ids:' . array_sum($ids);

//array_search -> search the array for a given value
$output = "User 255 is at index: " . array_search("user255", $users);

//in_array -> verify if value exists in the array (will return 1 if true)
$output = "User 1 exists: " . in_array("user1", $users);


//explode -> turns string into array
$tags = 'tech,code,programming,whatever';
$tags_array = explode(",", $tags);
var_dump($tags_array);


echo "<br />";


//implode -> turns array into string
$myArray = [1,2,3,4,5];
$myStrings = implode("," , $myArray);
echo $myStrings


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
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>
            <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p>
            <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>