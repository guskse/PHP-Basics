<?php

//Creating a class a blueprint for an object:

class User
{
    //PROPERTIES

    //public means that the property can be accessed outisde of the class
    public $name;
    public $email;



    //constructor function

    /*When instantiating the object, will pass $name and $email
    ex: new User("john","abc@email.com");
    */

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


    //METHODS
    public function login()
    {
        # $this->name will access the property name of the object
        echo $this->name . ' logged in successfully!';
    }
}


//Instantiate a user object from this class
$user1 = new User("john", "john@gmail.com");

var_dump($user1);

echo "<br />";

$user1->login();
