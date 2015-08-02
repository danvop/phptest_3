<?php
$client = new SoapClient("http://localhost/php-3/soap/news.wsdl"); 
try{ 
  // Сколько новостей всего? 
  $result = $client->getNewsCount();
  echo "<p>Всего новостей: $result</p>"; 
  // Сколько новостей в категории Политика? 
  $result = $client->getNewsCountByCat(1); 
  echo "<p>Всего новостей в категории Политика: $result</p>"; 
  // Покажем конкретную новость 
  $result = $client->getNewsById(1); 
  $news = unserialize(base64_decode($result)); 
  var_dump($news); 
}catch(SoapFault $e){
  echo 'Операция '.$e->faultcode.' вернула ошибку: '.$e->getMessage();
  }
/* //example how to parse cbr.ru data
$client = new SoapClient("http://www.cbr.ru/dailyinfowebserv/dailyinfo.asmx?wsdl");
try{
  //cbr.ru
  $param["On_date"] = "2015-03-23T12:10:00";
  $res = $client->GetCursOnDateXML($param);
  $res->GetCursOnDateXMLResult->any;


  var_dump($res);
}catch(SoapFault $e){
  echo 'Операция '.$e->faultcode.' вернула ошибку: '.$e->getMessage();
  }*/
