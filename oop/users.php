<?php
class User{
  public $name, $login, $password;

  function __construct($name, $login, $password){
    $this->name = $name;
    $this->login = $login;
    $this->password = $password;
  }
  function __destruct(){
    echo "$this->name [$this->login] deleted<br>";
  }
  function showInfo(){
    echo "$this->name : $this->login
    : $this->password";
    echo "<br>";
  }
}

$user1 = new User('Nikolay','Kolyan1','123\@AF');
$user2 = new User('Boris','Boris1953','16041953');
$user3 = new User('Vladimir','Volodya','Valdemar123');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

