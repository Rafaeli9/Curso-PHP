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
    class aula{
        var $curso;
        var $disciplina;
        var $horario;
        var $professor;
        Var $status;
    
       
    function iniciada(){
        $this->status = true;
    }

    function finalizada(){
        $this->status = false;
    }
}
    ?>
</body>
</html>