<?php

$age = 7;

// If statement
if ($age > 18) {

    echo 'you are old enough to drink!';
};

// If-Else

if ($age > 18) {
    echo 'you are old enough to drink!';
} else {
    echo 'you are not old nough to drink';
};



// Nested if statement

if ($age >= 21) {
    echo 'you are old enough to vote!';
} else {
    if ($age >= 18){
        echo 'you\'re' . ' old enough to vote';
    }else{
        echo 'you\'re' . ' not old enough to drink nor vote';
    }
};



// If-Else-If

if ($age > 18) {
    echo 'you are old enough to drink';
} else if ($age > 16) {
    echo 'you are in high school';
} else {
    echo 'you are just a kiddo';
}
