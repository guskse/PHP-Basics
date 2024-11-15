<?php

class User
{
  // Properties
  public $name;
  public $email;

  //private property means it cannot be accessed without a getter function
  private $status = "active";



  //construct function
  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }


  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  //GETTER FUNCTION can access properties that are private
  public function getStatus()
  {
    echo $this->name . " is " . $this->status;
  }

  //SETTER FUNCTION can change properties that are private
  public function setStatus($status){
    $this->status = $status;
  }

}


// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');
$user1->login();
$user2 = new User('Jane Doe', 'jane@gmail.com');
$user2->login();

// var_dump($user2);



//CALLING THE SETTER AND GETTER FUNCTIONS
$user2->setStatus("offline");
$user2->getStatus();