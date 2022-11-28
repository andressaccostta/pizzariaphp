<?php  session_start();?> 
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<head>
    <title>Cardápio</title>
    <?php include("estilos.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>

    <section class="menu" id="menu">
        <h1>Nosso Cardápio</h1>
        <h3> As melhores Pizzas da Região !! </h3>


        <table>
        <td> <h1> "PIZZAS MAIS PEDIDAS" </h1></td>
        <td> - <br> <h3> Frango  c/ Catupiry R$100,00</h3></td>
          <td> - <h3> Portuguesa R$30,00 </h3></td>
          <td> - <h3> Calabresa R$40,00</h3></td>
          <td> - <h3> Marguerita R$50,00</h3></td>
          
      </table>


        <?php

        $items = array(
           
            ['nome' => ' Pizza (Sabor Frango com Catupiry)', 'img' => 'img/peito de peru.jpg', 'preco' => '100.00'],
            ['nome' => 'Pizza (Sabor Marguerita)', 'img' => 'img/azeitonas pretas.jpg', 'preco' => '50.00'],
            ['nome' => 'Pizza (Sabor Vegana)', 'img' => 'img/peperroni.jpg', 'preco' => '20.00'],
            ['nome' => 'Pizza (Sabor Portuguesa)', 'img' => 'img/pexels-engin-akyurt-2619970.jpg', 'preco' => '30.00'],
            ['nome' => 'Pizza (Sabor Calabresa)', 'img' => 'img/pexels-horizon-content-3915857.jpg', 'preco' => '40.00'],

        );
       
        foreach ($items as $key => $value) {
        ?>

            <div class="box-container">
                <div class="image">
                    <img src="<?php echo $value['img'] ?>" />
                    <a href="?adicionar=<?php echo $key ?>">Add ao carrinho!</a>
                  



                    </div>
                </div>
            <?php

        }

            ?>
            </div>



            <?php
            if (isset($_GET['adicionar'])) {
                // se existir o GET adicionar, vamos adicionar no carrinho
                $idProduto = (int) $_GET['adicionar'];
                if (isset($items[$idProduto])) {
                    if (isset($_SESSION['carrinho'][$idProduto])) {
                        $_SESSION['carrinho'][$idProduto]['quantidade']++;
                    } else {
                        $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $items[$idProduto]['nome'], 'preco' => $items[$idProduto]['preco']);
                    }
                    echo '<script type="text/javascript">sweetAlert("Pedido feito com sucesso!","Itens adicionados no carrinho :)","success")</script>';
                } else {
                    die('Você não pode adicionar um item que não existe');
                }
            }


            ?>
            <h1>Carrinho</h1>;

            <?php include('carrinho.php'); ?>
           <h5>Itens adicionados no carrinho, terá seu valor total somado aqui!!!</h5>
            <?php include('subtotal.php'); ?>
            
            </div>


           

    </section>










</body>

</html>