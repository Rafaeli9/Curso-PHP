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
    class Reptil extends Animal {
        private $corEscama;
        public function alimentar(){
            echo"<p>Comendo Vegetais</p>";
        }
        public function emitirSom(){
            echo"<p>Som de Réptil";
        }
        public function locomover(){
            echo"<p>Rastejando</p>";
        }
        public function getCorEscama()
        {
                return $this->corEscama;
        }
        public function setCorEscama($corEscama)
        {
                $this->corEscama = $corEscama;

                return $this;
        }
    }
  ?>
</body>
</html>