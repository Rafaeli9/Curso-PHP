<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO POO</title>
</head>
<body>
    <pre>
  <?php
  require_once 'pessoa.php';
  $a1 = new Tecnico();
  $a1->setNome("Antônio");
  $a1->setMatr(1111);
  $a1->setIdade(26);
  $a1->setSexo('M');
  $a1->setCurso("PHP para os fortes");
  $a1->pagarMensalidade();
  $a1->setRegistroProfissional(11345640);
  $a1->praticar();


  $p1 = new Professor();
  $p1->setNome("Carla");
  $p1->setIdade(65);
  $p1->setSexo('F');
  $p1->setEspecialidade("PHP");
  $p1->setSalario(4500);
  $p1->receberAumento(300);

  print_r($p1);
  print_r($a1);
  ?>
  </pre>
</body>
</html>