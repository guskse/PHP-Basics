<?php
//avoid using $_REQUEST, use $_POST or $_GET instead!!.

// http://localhost/php-basics/06-superglobals/05-request/?name=brad
echo $_REQUEST['name'] ?? "";  //brad
?>


<form method="post">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
  </div>
  <input type="submit" name="submit" value="Submit">
</form>