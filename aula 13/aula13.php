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
            $valor = isset($_GET["num"])?$_GET["num"]:0;
            $c = 0;
            echo "Analisando o número $valor<br/>";
           for($i=1; $i<=$valor; $i++){
           if($valor % $i ==0){            
            $c++;
            $qtd .="," . $i; 
           }
        }
        if($c == 2 && $c>0){
            echo "$valor é PRIMO!";
        }
        elseif($c>2){
            echo "$valor NÃO é PRIMO!";
        }
        echo "<br/> O total de múltiplos de $ valor é $c";
        echo "<br/>Valores multiplos de $valor são $qtd ";
  ?> 
</body>
</html>