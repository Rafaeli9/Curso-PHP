<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO PHP</title>
</head>
<body>
  <?php
        $nota1 = isset($_GET["nota1"])? $_GET["nota1"]: "Infome uma nota";
        $nota2 = isset($_GET["nota2"])? $_GET["nota2"]: "Infome uma nota";
        $media = ($nota1 + $nota2) / 2;

        if($media == 0 || $media <5){
            echo "O aluno com as notas $nota1 e $nota2 tem a média $media e esta REPROVADO!";
        }
        elseif($media <7){
            echo "O aluno com as notas $nota1 e $nota2 tem a média $media e esta RECUPERAÇÃO!";
        }
        else{
            echo "O aluno com as notas $nota1 e $nota2 tem a média $media e esta APROVADO!";
        }
  ?>
    </br>
    <a href="curso.php"> <button type="submit" value="Voltar">Voltar</button></a>
</body>
</html>