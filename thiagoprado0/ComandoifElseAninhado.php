<?php
$idade = 20;
$testePratico = false;
    if(($idade >= 18 ) and ($testePratico == true)){
    echo("Pode retirar CNH");
}else{
    if(($idade < 18) and ($testePratico == false)){
    echo ("Reprovado pela Idade e Teste Prático");
    } else{
        if($idade < 18){
            echo ("Reprovado pela Idade");
        }else{
            echo ("Reprovado pelo teste prático");

        }
    
    }
    
}
?>