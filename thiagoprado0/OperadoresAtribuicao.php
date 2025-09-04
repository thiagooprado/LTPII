<?php
$PrimeiroNumero = 10;
echo  ("O valor da variável Número Primeiro é: $PrimeiroNumero");

//Utilizando operador de atribuição de forma aninhada
echo nl2br ("\nO valor da variável Número Primeiro + Número Segundo é:".$PrimeiroNumero = ($NumeroSegundo = 5) + $PrimeiroNumero ."\n");

//Utilizando operador de atribuição de forma combinada
echo ("Somando 5 Unidades a variável Número Segundo: ".$NumeroSegundo += 5 );

echo nl2br ("\nO Valor de Número Segundo é: $NumeroSegundo\n");
echo ("O Valor do Número Primeiro é: $PrimeiroNumero");

//Utilazando Operador de Atribuição de forma Referenciada
echo nl2br ("\nA variáver Número Segundo sendo Refência para o Número Primeiro ".
             $NumeroSegundo = &$PrimeiroNumero );

echo nl2br ("\nO Valor de Número Segundo é: $NumeroSegundo\n");
?>