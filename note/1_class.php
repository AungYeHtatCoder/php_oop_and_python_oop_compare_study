<?php
// Define a class for the object you want to create
class User {
  // Define class properties
  public $username;
  public $password;

  // Define a constructor method to initialize the object
  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }

  // Define other methods to manipulate the object's data
  public function getUsername() {
    return $this->username;
  }

  public function setUsername($username) {
    $this->username = $username;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($password) {
    $this->password = $password;
  }
}

// Create an instance of the User class
$user = new User("johnsmith", "password123");

// Use the object's methods to manipulate its data
echo $user->getUsername(); // Outputs "johnsmith"
$user->setUsername("janesmith");
echo $user->getUsername(); // Outputs "janesmith"