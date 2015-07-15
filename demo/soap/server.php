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
      return 0;
      //throw new SoapFault("Server", "Несуществующий id товара");
    }	
  }
//testing function--------
echo getStock("b");
echo getStock("z");
exit;
//-----end testing-------
// Отключение кэширования WSDL-документа
ini_set("soap.wsdl_cache_enabled", "0");
// Создание SOAP-сервер
$server = new SoapServer("http://mysite.local/demo/soap/stock.wsdl");
// Добавить класс к серверу
$server->addFunction("getStock");
// Запуск сервера
$server->handle();
?>