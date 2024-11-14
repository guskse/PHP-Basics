<?php

$number = 1;

while($number <= 10){
    //check if number is even
    if ($number % 2 == 0) {
        echo $number . ' is even <br />';
    }else {
        echo $number . ' is odd. <br />';
    }
    $number++;
}


//break out of loop
for($i = 0; $i <= 10; $i++){
    if($i == 5){
        break;
    }
    echo $i . '<br />';
}


//skip and continue
for($i = 0; $i <= 10; $i++){
    if($i == 5){
        continue;  //will skip when i = 5
    }
    echo $i . '<br />';
}



$studentGrades = [
    'Joab' => 75,
    'Jill' => 92,
    'Jack' => 82,
    'Joan' => 80
];

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 90) {
        echo $name . ' has an excellent grade. <br />';
    } else if ($grade < 90 && $grade >= 80) {
        echo $name . ' needs to study hard. <br />';
    } else {
        echo $name . ' you suck! <br />';
    }
}
