<?php

//INHERITANCE


class User
{
  public $name;
  public $email;
  protected $status = 'active'; //protected property can only be accessed by a getter function

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}


//inherit class
class Admin extends User
{
  public $permission_level; //new property that only the Admin class has.

  public function __construct($name, $email, $permission_level)
  {
    $this->permission_level = $permission_level;

    //call constructor method from the User class
    parent::__construct($name, $email); 
  }


  //this login function will override the User class login function
  public function login(){
    echo 'Admin ' . $this->name . ' logged in ';
  }


  //getter function
  public function getStatus()
  {
    echo $this->status;
  }


}


$admin1 = new Admin("Tom", "Tom@gmail.com", 5);

var_dump($admin1);

$admin1->login();
$admin1->getStatus();

?>