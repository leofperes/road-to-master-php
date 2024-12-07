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

            $valor_frete_aux = $cartao_loja && $valor_compra >= 400 ? 0 : ($cartao_loja && $valor_compra >= 300 ? 10 : ($cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));
            $desconto_frete = $valor_frete != $valor_frete_aux ? true : false
        ?>
        <h2>Detalhes do pedido</h2>
        <p>Possui cartão da loja? <?= $cartao_loja ? 'Sim' : 'Não'; ?>

        <p>Valor da compra: <?php echo $valor_compra ?></p>
        <p>Recebeu desconto no frete?
            <?php
                $teste = $desconto_frete ? 'Sim' : 'Não';
                echo $teste;
            ?></p>
        <p>Valor do frete: <?php echo $valor_frete ?></p>
    </body>
</html>