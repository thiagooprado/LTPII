<?php
    
    $nota1 = isset($_GET['nota1']) ? $_GET['nota1'] : 5;
    $nota2 = isset($_GET['nota2']) ? $_GET['nota2'] : 8;
    $nota3 = isset($_GET['nota3']) ? $_GET['nota3'] : 3.9;

    
    $total = $nota1 + $nota2 + $nota3;

   
    $media = $total / = ;

   
    echo ($media >= 8.5 ? "Aprovado" : "Reprovado");
?>
