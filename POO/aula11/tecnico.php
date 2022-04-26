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
        class Tecnico extends Aluno {
            private $registroProfissional;

            public function praticar(){
                echo "<p>Agora estou a praticar a matéria</p>";
            }
            public function getRegistroProfissional()
            {
                        return $this->registroProfissional;
            }
            public function setRegistroProfissional($registroProfissional)
            {
                        $this->registroProfissional = $registroProfissional;

                        return $this;
            }
        }
    
    ?>
</body>
</html>