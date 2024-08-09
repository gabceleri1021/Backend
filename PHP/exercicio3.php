<?php
$estado_cliente = 'Nâo_vip';
$estado_compras = 100;

if ($estado_cliente == 'vip' or $estado_compras > 500) {
    echo 'O cliente tem direito a desconto!';
} else {
    echo 'O cliente não tem direito a desconto';
}















?>