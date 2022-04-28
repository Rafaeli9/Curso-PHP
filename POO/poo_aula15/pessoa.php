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
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }

        protected function ganharExp($n) {
            $this->experiencia += $n;
        }
        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome)
        {
                $this->nome = $nome;

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
        public function getSexo()
        {
                return $this->sexo;
        }
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }
        public function getExperiencia()
        {
                return $this->experiencia;
        }
        public function setExperiencia($experiencia)
        {
                $this->experiencia = $experiencia;

                return $this;
        }
    }
  ?>
</body>
</html>