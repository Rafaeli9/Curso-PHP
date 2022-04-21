<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO DE POO</title>
</head>
<body>
    <pre>
    <?php
       require_once 'pessoa.php';
       require_once "livro.php";

       $p[0] = new Pessoa("Pedro", 22, "M");
       $p[1] = new Pessoa("Maria", 31, "F");

       $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
       $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
       $l[2] = new Livro("PHP Avançadp", "Ana Paula", 800, $p[1]);

       $l[0]->abrir();
       $l[0]->folhear(300);
       $l[0]->detalhes();

       $l[1]->detalhes();
       $l[2]->detalhes();
       
    ?>
    </pre>
</body>
</html>












