<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO PHP</title>
</head>
<body>
  <pre>
  <?php     
    echo "Exemplo 1</br>";

      $v = array("A", "J", "M", "X", "K");
      print_r($v);
  
    echo "----------------------<br/>";

    echo "Exemplo 2</br>";
 
      var_dump($v);

    echo "----------------------<br/>";

    echo "Exemplo 3</br>";

      $tot = count($v);
      echo "O vetor tem ".count() ." elementos";
      echo " o vetor tem $tot de elementos";
 
    echo "----------------------<br/>";
  
  ?>
  </pre>
</body>
</html>