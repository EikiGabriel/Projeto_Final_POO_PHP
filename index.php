<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <pre>
        <h1>Porjeto Final</h1>
        <?php
            require_once 'AcoesVideo.php';
            require_once 'Gafanhoto.php';
            require_once 'Pessoa.php';
            require_once 'Video.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video("Aula 2 php");
            $v[1] = new Video("Aula 12 php");
            $v[2] = new Video("Aula 15 html");

            $g[0] = new Gafanhoto("Matheus", 21, 'M', "juba");
            $g[1] = new Gafanhoto("Marcelle", 43, 'F', "Ursula");

            $vis[0] = new Visualizacao($g[0], $v[2]);
            $vis[0] = new Visualizacao($g[0], $v[1]);

            $vis[0]->avaliar();
            $vis[0] ->avaliarPorc(80);

            print_r($vis[0]);


        ?>
        </pre>
    </body>
</html>