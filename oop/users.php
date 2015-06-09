<?php
function __autoload($name){
  require "$name.class.php";
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



