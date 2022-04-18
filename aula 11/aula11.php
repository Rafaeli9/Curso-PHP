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
        $i = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $f = isset($_GET["final"])?$_GET["final"]:0;
        $incr = isset($_GET["incremento"])?$_GET["incremento"]:1;

        if($i >= $f){
            while ($i >= $f){
                echo "$i ";
                $i -= $incr;
            }
        }
        elseif($i <= $f){
                while($i <= $f){
                    echo "$i ";
                    $i += $incr;
            }
        }   
    ?>
</body>
</html>