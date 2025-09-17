<?php
    $numero = $_GET['numero'];
    switch ($numero){
        case 1 : echo ("Dia 1 Domingo"); break;
        case 2 : echo ("Dia 2 Segunda Feria"); break;
        case 3 : echo ("Dia 3 Terça Feira"); break;
        case 4 : echo ("Dia 4 Quarta Feira"); break;
        case 5 : echo ("Dia 5 Quinta Feira"); break;
        case 6 : echo ("Dia 6 Sexta Feira"); break;
        case 7 : echo ("Dia 7 Sabado"); break;
        default : echo ("Não foi escolhido Nenhum dia");
    }
?>