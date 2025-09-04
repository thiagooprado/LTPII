<?php
echo nl2br ("Resolva o problema a seguir: Utilize os Operadores de Comparação que foram até aqui estudados:\n\n");

$PrimeiroNumero = 5;
$SegundoNumero = 5;
$TerceiroNumero = 10;
$PrimeiroNome = "Renata";
$SegundoNome = "renata";
$TerceiroNome = "Renata";

echo nl2br ("\n$PrimeiroNumero = \n");
echo ("$SegundoNumero = \n");
echo nl2br ("\n$TerceiroNumero =\n");
echo ("$PrimeiroNome = ");
echo nl2br ("\n$SegundoNome =\n");
echo ("$TerceiroNome = ");

// Conjução ( and ou && )
//echo (" O Primeiro Nome é Diferente do Segundo Nome E O Primeiro Número é igual ao Segundo Número Resultado =($PrimeiroNome == $SegundoNome) and ($PrimeiroNumero != $SegundoNumero)");
//var_dump (($numero3 == $numero2) and ($nome1 != $nome2));

// Disjunção Inclusiva ( or ou || )
//echo nl2br ("\n($numero3 <= $numero2) || ($numero2 != $numero2)");
//var_dump (($numero3 <= $numero2) || ($numero2 != $numero2));

// Disjunção Exclusiva ( xor )
//echo nl2br ("\n($nome1 != $nome2) xor ($numero2 >= $numero3)");
//var_dump (($nome1 != $nome2) xor ($numero2 >= $numero3));

// Negação  ( ! )
//echo nl2br ("\n !($numero2 == $numero3) : ");
//var_dump (!($numero2 == $numero3))

?>