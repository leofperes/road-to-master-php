<html>
    <head>
        <meta charset="utf-8"/>
        <title>Curso Php</title>
    </head>

    <body>
        <?php
            //string
            $firstName = 'leonardo';

            //int
            $age = 23;

            //float
            $weight = 76.5;

            //
            $overweight = true;
        ?>
        <?php
            //comentário de uma linha
            echo 'Name: '.$firstName.'<br>';
            echo "Meu nome é $firstName<br/>";
            #comentário de uma linha estilo shell
            print 'oi'

            /* comentario de multiplas linhas
               este tipo de comentario permite que varias linhas
               sejam comentadas ao mesmo tempo
            */
        ?>
        <h1>Ficha cadastral</h1>
        <p>Nome: <?php echo $firstName ?></p>
        <p>Idade: <?php echo $age ?></p>
        <p>Peso: <?php echo $weight ?></p>
        <p>Sobrepeso: <?php echo $overweight ?></p>

        <?php
            define('BD_URL', 'br_bd_dev');
            echo BD_URL;
        ?>
    </body>
</html>