<?php
        $sub = 0;
        
    foreach($_SESSION['carrinho'] as $key => $value){
        $sub += $value['preco']*$value['quantidade'];
    }
        echo '<div class="subtotal">';
       
        echo '<p>Valor Total:</p>';
        
        echo 'R$'. number_format($sub,2,',', '.');
    ?>
