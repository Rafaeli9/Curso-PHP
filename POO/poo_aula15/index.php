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
        require_once 'videos.php';
        require_once 'acoesVideo.php';
        require_once 'gafanhoto.php';
        require_once 'pessoa.php';
        require_once 'videos.php';
        require_once 'visualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);

        print_r($v);
        print_r($vis);
        print_r($vis1);
        print_r($visua);
        print_r($visua1);
    ?>
  </pre>
</body>
</html>