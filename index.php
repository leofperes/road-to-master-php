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

        <?php
            $cartao_loja = true;
            $valor_compra = 100;

            $valor_frete = 50;
            $desconto_frete = false;

            if($cartao_loja && $valor_compra >= 100) {
                $valor_frete = 0;
                $desconto_frete = true;
            }
        ?>
        <h2>Detalhes do pedido</h2>
        <p>Possui cartão da loja? <?php if($cartao_loja){
            echo 'Sim<br/>';
            } else {
                echo 'Não<br/>';
            } ?></p>

        <p>Valor da compra: <?php echo $valor_compra ?></p>
        <p>Recebeu desconto no frete? <?php if($desconto_frete == true){
                echo 'Sim<br/>';
            } else {
                echo 'Não<br/>';
            } ?></p>
        <p>Valor do frete: <?php echo $valor_frete ?></p>
    </body>
</html>