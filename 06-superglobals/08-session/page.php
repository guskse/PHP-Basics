<?php

//initialize session
session_start();


//name was set in the index.php, but the page.php has access to it because of $_SESSION
if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo 'name is not set';
}

?>