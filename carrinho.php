<?php
       
         foreach ($_SESSION['carrinho'] as $key => $value) {
            // nome do produto
            // quantidade
            // preço
            
            echo '<div class="carrinho-item">';
            echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['quantidade'] * $value['preco']).',00</p>';
            
            echo '</div>';
        }
    ?>