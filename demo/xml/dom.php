<?php 
  header( "Content-Type: text/html;charset=utf-8"); 

  $dom = new DomDocument(); 
  $dom->load("catalog.xml");
  $root = $dom->documentElement;
  //echo $root->nodeType;
  //echo $root->textContent;
  $books = $root->childNodes;
  //var_dump($books);
  foreach($books as $book){
    echo $book->textContent;
    echo "<hr>";
  }
?>
<html>

<head>
  <title>Каталог</title>
</head>

<body>
  <h1>Каталог книг</h1>
  <table border="1" width="100%">
    <tr>
      <th>Автор</th>
      <th>Название</th>
      <th>Год издания</th>
      <th>Цена, руб</th>
    </tr>
    <?php 
      //Парсинг 
    ?>
  </table>
</body>

</html>