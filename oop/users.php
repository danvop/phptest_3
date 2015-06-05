<?php
class User{
  public $name, $login, $password;

  function showInfo(){
    echo "$this->name : $this->login
    : $this->password";
    echo "<br>";
  }
}

$user1 = new User();
$user2 = new User();
$user3 = new User();
$user1->name = 'Nikolay';
$user1->login = 'Kolyan1';
$user1->password = '123\@AF';

$user2->name = 'Boris';
$user2->login = 'Boris1953';
$user2->password = '16041953';

$user3->name = 'Vladimir';
$user3->login = 'Volodya';
$user3->password = 'Valdemar123';

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

