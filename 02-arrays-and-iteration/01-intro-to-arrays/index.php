<?php

$listOfNames = ['Jack','Doe','Johnny'];
$numbers = [1,2,3,4,5,6];


function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// inspect($listOfNames);
// inspect($numbers);

// echo $listOfNames[2];

// die();



//ADD ELEMENT TO END OF AN ARRAY
$numbers[] = 100;
inspect($numbers);

//CHANGE ELEMENT OF INDEX IN ARRAY
$numbers[6] = 150;
inspect($numbers);


//REMOVE ELEMENT FROM ARRAY (It will remove the index too)
unset($numbers[6]);
inspect($numbers);

?>