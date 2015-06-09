<?php
function __autoload($name){
  require "$name.class.php";
}
$obgj = new MyClass();
