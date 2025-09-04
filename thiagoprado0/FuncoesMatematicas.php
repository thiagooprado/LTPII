<?php
    $PrimeiroNumero = 5;
    $SegundoNumero = 4;
    $TerceiroNumero = 5.9;
    echo ("O valor do $TerceiroNumero arredondado é : ".round($TerceiroNumero));
    echo nl2br ("\nO valor do $TerceiroNumero arredondado é : ".floor($TerceiroNumero)."\n");
    echo ("O valor do $TerceiroNumero arredondado é : ".ceil($TerceiroNumero));
    echo nl2br ("\nO valor do $PrimeiroNumero elevado $SegundoNumero : ".pow($PrimeiroNumero,$SegundoNumero)."\n");
    echo ("A raiz quadrada de $SegundoNumero é : ".sqrt($SegundoNumero));
?>