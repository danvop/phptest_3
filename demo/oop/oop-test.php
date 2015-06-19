<?php
class User{
  //private $arr = [];
  private $name, $age;
  
//  function setName($v){$this->name = $v;}
//  function getName($v){return $this->name;}
  function __set($n, $v){
    //echo $n, ":", $v;
    switch($n){
      case 'name': $this->name = $v; break;
//      case 'age': $this->age = $v; break;
      default: throw new Exception('!!!');
    }
    //$this->arr[$n] = $v;
  }
  function __get($n){
    echo $this->name;
//    return $this->arr[$n];
  }
}

$obj = new User();
print_r($obj);
$obj->name= "John";
//$obj->param = 100;
echo $obj->name;

/*class ParentClass{
  public $public = 1;
  protected $protected = 2;
  private $private = 3;
  
  
  function getProtected(){
    return $this->protected;
  }
  function getPrivate(){
    return $this->private;
  }
}

class ChildClass{
  function getParentProtected(){
    return $this->protected;
  }
  function getParentPrivate(){
    return $this->private;
  }
  function getRealParentPrivate(){
    return $this->getPrivate();
  }
}

$child = new ChildClass();
echo $child->getParentProtected();
echo $child->getParentPrivate(); // нельзя
echo $child->getRealParentPrivate();

//$parent = new ParentClass();
//echo $parent->public;
//echo $parent->protected; // нельзя
//echo $parent->private; // нельзя

//echo $parent->getProtected();
//echo $parent->getPrivate();*/

/*function __autoload($name){
  require "$name.class.php";
}
$obgj = new MyClass();*/
