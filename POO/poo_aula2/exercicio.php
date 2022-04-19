<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSO DE POO</title>
</head>
<body>
    <?php
       require_once 'aula.php';
       $aula1 = new aula;
       $aula1->curso = "PHP";
       $aula1->disciplina = "Orientação a Objetos";
       $aula1->horario = "manhã";
       $aula1->professor = "Guanabara";
       $aula1->iniciada();
       print_r($aula1);
    ?>
</body>
</html>