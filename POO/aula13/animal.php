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
    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $membros;
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        public function getPeso()
        {
                return $this->peso;
        }
        public function setPeso($peso)
        {
                $this->peso = $peso;

                return $this;
        }
        public function getIdade()
        {
                return $this->idade;
        }
        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }
        public function getMembros()
        {
                return $this->membros;
        }
        public function setMembros($membros)
        {
                $this->membros = $membros;

                return $this;
        }
    }
  ?>
</body>
</html>