<?php
try {
  // Создание SOAP-клиента
  $client = new SoapClient("http://localhost/php-3/demo/soap/stock.wsdl");
	
  // Посылка SOAP-запроса c получением результат
  $result = $client->getStock("z");
  echo "Текущий запас на складе: ", $result;
} catch (SoapFault $exception) {
  echo $exception->getMessage();	
}
?>