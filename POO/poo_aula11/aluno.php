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
  class Aluno extends Pessoa {
      private $matr;
      private $curso;

      public function pagarMensalidade(){
          echo "<p>Pagando mensalidade do aluno $this->nome</p>";
      }
      public function getMatr()
      {
            return $this->matr;
      }
      public function setMatr($matr)
      {
            $this->matr = $matr;
      }
      public function getCurso()
      {
            return $this->curso;
      }
      public function setCurso($curso)
      {
            $this->curso = $curso;
      }
  }
  ?>
</body>
</html>