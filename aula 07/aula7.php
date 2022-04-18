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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo= $_GET["op"];
    echo "<br/>Os valores passados foram $n1 e $n2";
    echo "<br> PS:digite s para somar e m para multiplicar";
    $r = ($tipo == "s") ? ($n1+$n2) : ($n1*$n2);
    echo "</br> O resultado é $r.</br>";
    
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "Sim" : "Não"; //igualdade
    echo "<br/> As variáveis são iguais? $r";

    $c = 3;
    $d = "3";
    $r = ($c === $d) ? "Sim" : "Não"; //idêntico
    echo "<br/> As variáveis são idênticas? $r</br>";

    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $med = ($nota1 + $nota2) / 2;
    $status = ($med < 6) ? "Reprovado" : "Aprovado";
    echo "<br/> O aluno com as notas $nota1 e $nota2 tem a média $med e está $status";

    $nota3 = $_GET["n3"];
    $nota4 = $_GET["n4"];
    $med = ($nota3 + $nota4) / 2;
    $status = ($med < 6) ? "Reprovado" : "Aprovado";
    echo "<br/> O aluno com as notas $nota3 e $nota4 tem a média $med e está ". (($med < 6) ? "Reprovado" : "Aprovado</br>");

    $ano = $_GET['an'];
    $idade = date("Y") - $ano;
    echo "</br></br> Quem nasceu em $ano tem a idade de $idade";
    $tipo = ($idade >=18 && $idade <65)?"é OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
    echo "<br/> E quem nasceu em $ano $tipo a votar<br/>";
  ?>
</body>
</html>