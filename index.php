<html>
    <head>
        <meta charset="utf-8"/>
        <title>Curso Php</title>
    </head>

    <body>
    <?php
        $nome = 'Leonardo';
        $idade = 19;
        $peso_corporal = 76.5;
        $doador = false;

        if(($idade > 16 && $idade < 69) && $peso_corporal >= 50){
            $doador = true;
        }
    ?>
        <h1>Bem vindo a página de doação de sangue</h1>
        <p>Vamos verificar se você atende aos requisitos para ser um doador!<br/></p>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso_corporal ?></p>
        <p><?php echo $doador == true ? 'Atende aos requisitos' : 'Não atende aos requisitos' ?>
    </body>
</html>