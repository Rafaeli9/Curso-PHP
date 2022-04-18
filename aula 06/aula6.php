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
    echo "</br>---- aula 6 ----</br>";
    $preco = $_GET["p"];
    echo "</br>O valor do porduto é de R$ $preco";
    $preco += $preco * 10 / 100;
    echo "<br/> O valor do produto com 10% de acréscimo é de R$ ". number_format($preco,2,",",".");
    $preco -= $preco * 10 / 100;
    echo "<br/> O valor do produto com 10% de desconto é de R$ ". number_format($preco,2,",",".");

    $ano = $_GET["aa"];
    echo "<br/><br/> O ano atual é de $ano e o ano anterior é ". --$ano;
    echo "</br>";

    $a = 3;
    $b = $a;
    $b += 5;
    echo "<br/> A varável A recebe $a";
    echo "<br/>A varável B recebe $b<br/>";
    
    $a = 3;
    $b = &$a; //variável de referência
    $b += 5;
    echo "<br/> A varável A recebe $a";
    echo "<br/>A varável B recebe $b<br/>";

    $x = "abc";
    $$x = "def";
    echo "<br/>A variável x contém $x";
    echo "</br> A variável abc recebeu o valor ". $$x; #variáveis de variáveis ou variável de variante
    echo "</br>";
  ?>
</body>
</html>