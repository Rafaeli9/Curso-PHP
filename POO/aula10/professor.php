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
  class Professor extends Pessoa{
      private $especialidade;
      private $salario;

      public function receberAumento($aum) {
          $this->salario += $aum;
      }
      public function getEspecialidade()
      {
            return $this->especialidade;
      }
      public function setEspecialidade($especialidade)
      {
            $this->especialidade = $especialidade;
      }
      public function getSalario()
      {
            return $this->salario;
      }
      public function setSalario($salario)
      {
            $this->salario = $salario;
      }
  }
  ?>
</body>
</html>