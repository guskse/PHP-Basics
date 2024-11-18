<?php

//set the cookie to empty string, and expiration to a negative number
//it will destroy the cookie.

setcookie('username', "", time() - 3600, '/');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>

  <p>
    Your cookie has been deleted. <a href="page.php">Go to page.php</a>
  </p>

</body>

</html>