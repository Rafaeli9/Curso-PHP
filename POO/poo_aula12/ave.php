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
    require_once 'animal.php';
    class Ave extends Animal{
        private $corPena;
        public function alimentar(){
            echo "<p>Comendo frutas</p>";
        }
        public function emitirSom(){
        echo"<p>Som de Ave<p/>";
        }
        public function locomover()
        {
            echo "<p>Voando</p>";
        }
        public function fazerNinho(){
            echo "<p>Construindo um ninho</p>";
        }
        public function getCorPena()
        {
                return $this->corPena;
        }
        public function setCorPena($corPena)
        {
                $this->corPena = $corPena;

                return $this;
        }
    }
  ?>
</body>
</html>