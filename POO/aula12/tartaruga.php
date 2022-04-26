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
    require_once 'reptil.php';
    class Tartaruga extends Reptil{
        public function locomover()
        {
        echo"<p>Andando beeemmm devagar</p>";
        }
    }
  ?>
</body>
</html>