<?php
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