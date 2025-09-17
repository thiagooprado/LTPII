<?php
    
    $nota1 = isset($_GET['nota1']) ? $_GET['nota1'] : 0;
    $nota2 = isset($_GET['nota2']) ? $_GET['nota2'] : 0;
    $nota3 = isset($_GET['nota3']) ? $_GET['nota3'] : 0;

    
    $total = $nota1 + $nota2 + $nota3;

    
    $average = $total / 3;

    
    echo ($average >= 5 ? "Aprovado" : "Reprovado");
?>
