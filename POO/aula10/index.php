<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO POO</title>
</head>
<body>
  <h1>
    <p> Php teste</p>
  </h1>
  <?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

  echo "teste php";
  require_once('pessoa.php');
  require_once('aluno.php');
  require_once('professor.php');
  require_once('funcionario.php');
  
  echo "Cheguei";

  $p1 = new Pessoa();
  $p2 = new Aluno();
  $p3 = new Professor();
  $p4 = new Funcionario();

  $p1->setNome("Pedro");
  $p2->setNome("Maria");
  $p3->setNome("Cláudio");
  $p4->setNome("Fabiana");

  $p1->setSexo("M");
  $p4->setSexo("F");

  $p2->setCurso("Infomática");
  $p3->setSalario(2500.75);
  $p4->setSetor("Estoque");

  $p3->receberAumento(500.20);
  $p4->mudarTrabalho();
  $p2->cancelarMatr();


  print_r($p1);
  print_r($p2);
  print_r($p3);
  print_r($p4);
  ?>
</body>
</html>
