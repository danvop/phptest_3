<?php
class SuperUser extends User implements ISuperUser{
  public $role;
  public static $countSuperUser = 0;
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