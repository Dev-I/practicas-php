<?php

$subtotal = 1500;
$tasa = 0.6;
$iva =0;
$edad = 34;

function calculaIva($sub, $tasa){
    $total = $sub * (1+$tasa);
    return $total;

}

$iva = calculaIva($subtotal,$tasa);
echo $iva;
?>