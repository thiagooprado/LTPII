<?php
echo nl2br ("Desenvolva a atividave a seguir: os seis dados (valores) logo abaixo são variaveis, portanto valores dinâmico:\n\n");

$PrimeiroNome = "Ana Paula";
$SegundoNome = "Ana Luiza Moura";
$TerceiroNome = "Jose Carlos";
$PrimeiroNumero = 80;
$SegundoNumero = 80;
$TerceiroNumero = 150.15;


echo nl2br ("\nPrimeiro Nome = $PrimeiroNome  \n");
echo ("Segundo Nome = $SegundoNome \n");
echo nl2br ("\nTerceiro Nome = $TerceiroNome \n\n");
echo ("Primeiro Número = $PrimeiroNumero  ");
echo nl2br ("\nSegundo Número = $SegundoNumero \n");
echo ("Terceiro Número = $TerceiroNumero \n");


echo nl2br ("\n\n\n O valor da variável primeiro Nome é: $PrimeiroNome\n");
echo ("O valor da variável terceiro Nome é: $TerceiroNome\n");
echo nl2br ("\nAna Paula e José Carlos são casados possuem uma filha: $SegundoNome\n");
//echo ("Ana Luiza Moura é estudante e ganha uma bolsa de: $TerceiroNumero por mês eqivalente à: R$".$TerceiroiroNumero *12   \n);
echo nl2br ("\nO nome Ana Luiza Moura possui 15 caracteres o último sobrenome é: $SegundoNome\n");
echo ("Incrementando uma unidade (Pós incremento) à variável Primeiro Número: $PrimeiroNumero++\n");

echo nl2br ("\nNovo valor da variável Primeiro Número é: \n");
echo ("A raiz quadrada da variável Primeiro Número é: \n");

echo nl2br ("O valor 81 == valor 80: \n");
var_dump (81 == 80);
echo ("O valor 80 <= valor 81: \n");
//var_dump (80 <=81);
echo nl2br ("\n 81 >= 80 xor 81 != 80: \n");
//var_dump ("(81 >= 80) xor (81 != 80:)");
echo ("80 == 80 and 81 != 80: ");



// Conjução ( and ou && )
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