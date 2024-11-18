<?php 

echo 'destroy php session page';

//initialize session
session_start();


//unset something from a session
unset($_SESSION['name']);  //will remove the 'name' from the _SESSION

//destroy entire session
session_destroy();

?>