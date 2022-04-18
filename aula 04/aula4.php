<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
        $n1 = 3;
        $n2 = 2;
        $m = ($n1 + $n2) /2;
    
        echo "</br>A soma de $n1 e $n2 é igual a ". ($n1 + $n2);
        echo "</br>A subtração de $n1 e $n2 é igual a ". ($n1 - $n2);
        echo "</br>A miltiplicação de $n1 e $n2 é igual a ". ($n1 * $n2);
        echo "</br>A divisão de $n1 e $n2 é igual a ". ($n1 / $n2);
        echo "</br>A média de $n1 e $n2 é igual a $m</br>";    
        
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];       
   ?>
</body>
</html>