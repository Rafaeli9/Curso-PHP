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
  require_once 'aluno.php';
  class Bolsista extends Aluno {
    private $bolsa;
    public function renovarBolsa(){
        echo "<p>Bolsa renovada.</p>";
    }
    public function pagarMensalidade(){
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
  }  
  ?>
</body>
</html>