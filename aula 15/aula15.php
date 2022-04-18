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
    function teste(&$x){
      $x += 2;
      echo "O valor de x é $x</br>";
      }
      $a = 3;
      teste($a);
      echo "O valor de A é $a";
      echo "<br/>-----------------------------------------------------</br>";
      
      include "funcoes.php";
      echo "<h1>Testando novas funções.</h1>";
      ola();
      mostraValor(4);
      echo "<h2>Finalizando programa...</h2>";

      function ola() {
          echo "Olá, Mundo!";
      }
      function mostraValor($x){
          echo"<h2>Acabei de receber o valor $x!</h2>";
      }
      
  ?>
</body>
</html>