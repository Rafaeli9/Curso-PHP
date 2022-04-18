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
     echo "</br>---- aula 5 ----";
     echo "<h2> Valores recebidos $v1 e $v2";
     echo "<br/> O valor absoluto de $v2 é " . abs($v2);
     echo "</br> A potenciação de $v1<sup>$v2</sup> é " .pow($v1, $v2);
     echo "<br/> A raíz de $v2 é ".sqrt($v2);
     echo "<br/> O valor de $v2 arredondado é " . round($v2);
     echo "<br/> O valor de $v2 arredondado para cima é " . ceil($v2);
     echo "<br/> O valor de $v2 arredondado para baixo é " . floor($v2);
     echo "</br> A parte inteira de $v2 é ".intval($v2);
     echo "</br> O valor de $v1 em moeda é R$".number_format($v1, 2, ",", ".");
     echo "</h2>";
  ?>
</body>
</html>