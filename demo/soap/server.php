<?php
// Описание функции Web-сервиса
  function getStock($id) {	
    $stock = [
			"a" => 100,
			"b" => 200,
			"c" => 300,
			"d" => 400,
			"r" => 500
    ];
    if (isset($stock[$id])) {
      $quantity = $stock[$id];		
      return $quantity;
    } else {
      //return 0;
      throw new SoapFault("Server", "Несуществующий id товара");
    }	
  }
// Отключение кэширования WSDL-документа
// в момент разработки кэш необходимо отключать
// по готовности включать
ini_set("soap.wsdl_cache_enabled", "0");
// Создание SOAP-сервер
$server = new 
  SoapServer("http://localhost/php-3/demo/soap/stock.wsdl");
// Добавить класс к серверу
$server->addFunction("getStock");
// Запуск сервера
$server->handle();
?>