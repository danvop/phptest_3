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

class SuperUser extends User{
  public $role;
  function __construct($n, $l, $p, $r){
    parent::__construct($n, $l, $p);
    $this->role = $r;
  }
  function showInfo(){
    parent::showInfo();
    echo "Role: {$this->role}\n";
  }
}

$user1 = new User('Nikolay','Kolyan1','123\@AF');
$user1->showInfo();

$user2 = new User('Boris','Boris1953','16041953');
$user2->showInfo();

$user3 = new User('Vladimir','Volodya','Valdemar123');
$user3->showInfo();

$user4 = new SuperUser('Vasya Pupkin', 'vasyap','0000','admin');
$user4->showInfo();




