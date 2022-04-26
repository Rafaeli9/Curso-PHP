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
  require_once 'pessoa.php';
  class Funcionario extends Pessoa {
      private $setor;
      private $trabalhando;

      public function mudarTrabalho() {
          $this->trabalhando = ! $this->trabalhando;
      }
      public function getSetor()
      {
            return $this->setor;
      }
      public function setSetor($setor)
      {
            $this->setor = $setor;
      }
      public function getTrabalhando()
      {
            return $this->trabalhando;
      }
      public function setTrabalhando($trabalhando)
      {
            $this->trabalhando = $trabalhando;
      }
  }
  ?>
</body>
</html>