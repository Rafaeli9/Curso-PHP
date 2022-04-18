<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO PHP</title>
</head>
<body>
  <?php     
     echo "Exemplo 1</br>";
    $n = array(3, 5, 8, 2);
    $n [] = 7;
    print_r($n);

  echo "----------------------<br/>";

  echo "Exemplo 2</br>";
  $c = range(5,20,5);//inicio, fim, passo(pulando de 5 em 5)
  print_r($c);

  echo "----------------------<br/>";

  echo "Exemplo 3</br>";
  $d = range(5,20,5);
  foreach($d as $valor){
    echo"$valor";
  }

  echo "----------------------<br/>";

  echo "Exemplo 4</br>";
  $v= array(0=>5, 1=>9, 2=>8,3=>7);
  print_r($v);
  $v[] = "E";
  unset($v[0]);

  echo "----------------------<br/>";
  
  echo "Exemplo 5</br>";
  $v= array(3=>5, 1=>9, 0=>8, 7=>7);
  unset($v[0]);
  print_r($v);

  echo "----------------------<br/>";
  
  echo "Exemplo 6</br>";

  $cad = array("nome"=>"Ana", "idade"=>23, "peso"=>65.5);
  $cad["fuma"] = true;
  print_r($cad);
  foreach($cad as $k => $c){
    echo "O campo $k possui o conteúdo $c</br>";
  }

  echo "----------------------<br/>";
 
  echo "Exemplo 7</br>";

  $m = array( array(6,4), array(4,9), array(3,2));
  $m[0][1] = $m[2][0];
  print_r($m);

    
  
  ?>
</body>
</html>