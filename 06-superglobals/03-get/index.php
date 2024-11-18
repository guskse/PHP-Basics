<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John


//checking if variable exists in the get request params
// echo isset($_GET['name']) ? $_GET['name'] : 'no name';  //method1
// echo $_GET['name'] ?? 'no name'; //method2


//prevent code entering the params
echo htmlspecialchars($_GET['name'] ?? '');


?>