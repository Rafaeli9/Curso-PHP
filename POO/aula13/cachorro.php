<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO POO</title>
</head>
<body>
  <?php
    require_once 'mamifero.php';
    class Cachorro extends Lobo{
        public function emitirSom(){
            echo "<p>Latindo AU!AU!AU!</p>";
        }
        function reagirFrase($frase){
          if($frase == "Toma Comida" || $frase == "Olá"){
            echo "<p>Abanar e Latir</p>";
          }else {
            echo "<p>Rosnar</p>";
          }
        }
        function reagirHora($hora, $min){
          if($hora<12){
            echo "<p>Abanar</p>";
          }elseif($hora >=18) {
            echo "<p>Ignorar</p>";
          }else{
            echo "<p>Abanar e Latir</p>";
          }
        }
        function reagirDono($dono){
          if($dono){
            echo "<p>Abanar</p>";
          }else{
            echo "<p>Rosanar e Latir</p>";
          }
        }
        function reagirIdadePeso($idade, $peso){
          if($idade < 5){
            if($peso < 10){
              echo "<p>Abanar</p>";
            }else{
              echo "<p>Latir</p>";
            }
          }else {
            if($peso < 10){
              echo "<p>Rosnar</p>";
            }else {
              echo "<p>Ignorar</p>";
            }
          }
        }
    }
  ?>
</body>
</html>