<?php
interface ISuperUser{
  function getInfo();
}

abstract class UserAbstract{
  abstract function showInfo();
}

class User extends UserAbstract{
  public $name, $login, $password;
  public static $countUser = 0;

  function __construct($name, $login, $password){
    $this->name = $name;
    $this->login = $login;
    $this->password = $password;
    ++self::$countUser;
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

class SuperUser extends User implements ISuperUser{
  public $role;
  public static $countSuperUser;
  function __construct($n, $l, $p, $r){
    parent::__construct($n, $l, $p);
    $this->role = $r;
    ++self::$countSuperUser;
  }
  function showInfo(){
    parent::showInfo();
    echo "Role: {$this->role}\n";
  }
//getInfo returns assoc array with elem_name = prop and values = prop_values
  function getInfo(){
    $getInfo;
    foreach($this as $name => $value){
      $getInfo = $this;
    }
    return $getInfo;
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
echo '<pre>';
print_r($user4->getInfo());
echo '</pre>';
echo 'current Users count: '. User::$countUser.'</br>';
echo 'include '. SuperUser::$countSuperUser .' SuperUser(s)' .'</br>'; 



