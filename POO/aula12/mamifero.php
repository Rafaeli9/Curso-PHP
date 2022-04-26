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
    class Mamifero extends Animal {
        private $corPelo;
        public function alimentar(){
            echo "<p>Mamando</p>";
        }
        public function emitirSom(){
            echo "<p>Som de mamífero</p>";
        }
        public function locomover(){
            echo "<p>Correndo</p>";
        }
        public function getCorPelo()
        {
                return $this->corPelo;
        }
        public function setCorPelo($corPelo)
        {
                $this->corPelo = $corPelo;

                return $this;
        }
    }
  ?>
</body>
</html>