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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos.";

    if($i >=18) {
        $v = "<br/>Já pode votar<br/>";
        $d = "Já pode dirigir<br/>";
    }
    else {
        $v = "<br/>Não pode votar<br/>";
        $d = "não pode dirigir<br/>";
    }
    echo "<br/>Com essa idade você $v e também $d.";

    if($i < 16){
        $tipoVoto = "Não vota!";
    }
    elseif (($i >= 16 && $i < 18) || ($i >65)){
        $tipoVoto = "Voto Opcional!";
    }
    else {
        $tipoVoto = "Voto OBRIGATÓRIO!";
    }
    echo "</br> Você esta com $i anos e $tipoVoto."
    ?>
    <a href="curso.php">Voltar</a>
</body>
</html>