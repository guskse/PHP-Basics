<?php
//the parameters for the setcookie function: name, value, expiration, and path
//set cookie
setcookie('username', 'gus', time() + 3600, '/');
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <p>Cookie set. <a href="page.php">Go to page.php</a></p>
</body>

</html>