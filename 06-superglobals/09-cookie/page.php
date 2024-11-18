<?php
var_dump($_COOKIE);
//get a hold of cookie data
//check if cookie has username key and value, if not, it will be set to 'Guest'
$username = $_COOKIE['username'] ?? 'Guest';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <h1>Welcome Back, <?= $username ?></h1>
  <a href="destroy.php">Delete cookie</a>
</body>

</html>