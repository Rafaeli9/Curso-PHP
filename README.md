# Curso-PHP

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
  
  
    <?php 
    echo "---- aula 3 ----<br/>";
    $nome = "Rafael";
    $idade = 36;
    echo "<br/>$nome tem $idade anos!</br>";

    echo "</br>---- aula 4 ----<br/>";
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
    echo "</br>---- aula 5 ----";
    echo "<h2> Valores recebidos $v1 e $v2";
    echo "<br/> O valor absoluto de $v2 é " . abs($v2);
    echo "</br> A potenciação de $v1<sup>$v2</sup> é " .pow($v1, $v2);
    echo "<br/> A raíz de $v2 é ".sqrt($v2);
    echo "<br/> O valor de $v2 arrendodado é " . round($v2);
    echo "<br/> O valor de $v2 arrendodado para cima é " . ceil($v2);
    echo "<br/> O valor de $v2 arrendodado para baixo é " . floor($v2);
    echo "</br> A parte inteira de $v2 é ".intval($v2);
    echo "</br> O valor de $v1 em moeda é R$".number_format($v1, 2, ",", ".");
    echo "</h2>";

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
    ?>
</body>
</html>
