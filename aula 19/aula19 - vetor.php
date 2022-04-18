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
      $v[] = "O";
      print_r($v); 
  
    echo "----------------------<br/>";
    
    echo "Exemplo 2</br>";

      $n = array(3, 5, 8, 2);
      array_push($n, 7);
      array_pop($n);
      
      $v = array("A", "J", "M", "X", "K");
      array_push($v, "O");
      print_r($v);
      array_pop($v);
      print_r($v);

    echo "----------------------<br/>";
  
    echo "Exemplo 3</br>";

    $n = array(3, 5, 8, 2);
    array_unshift($n, 7);
    array_shift($n);

    $v = array("A", "J", "M", "X", "K");
    array_unshift($v, "O");
    print_r($v);
    array_shift($v);
    print_r($v);

    echo "----------------------<br/>";

    echo "Exemplo 4</br>";

    $n = array(3, 5, 8, 2);
      print_r($n);
      sort($n);
      print_r($n); 
     
      rsort($n);
      print_r($n); 

      $v = array("A", "J", "M", "X", "K");
      print_r($v);
      sort($v);
      print_r($v);
      
      rsort($v);
      print_r($v); 


    echo "----------------------<br/>";

    echo "Exemplo 4</br>";

      $n = array(3, 5, 8, 2);
      print_r($n);
      asort($n); // coloca os valores em ordem, tirando os índices de ordem
      print_r($n); 
    
      arsort($n); //coloca em ordem reversa, mas os índices se mantém os mesmos
      print_r($n); 

      $v = array("A", "J", "M", "X", "K");
      print_r($v);
      asort($v);
      print_r($v);
    
      arsort($v);
      print_r($v); 
  
    echo "----------------------<br/>";
    echo "Exemplo 5</br>";

      $n = array("C", "E", "H", "B");
      print_r($n);
      ksort($n); // coloca os índices em ordem, sorteia os valores
      print_r($n); 
    
      krsort($n); //coloca os índices em descrescente, e os valores permanecem fora de ordem
      print_r($n); 

      $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
      print_r($v);
      ksort($v);
      print_r($v);
    
      krsort($v);
      print_r($v); 
    
    echo "----------------------<br/>";
  
  ?>
  </pre>
</body>
</html>