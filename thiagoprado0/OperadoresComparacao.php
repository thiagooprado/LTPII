<?php
  $verdadeiro = true;
  $falso = false;
  //echo ("O valor da variável Verdadeiro é: $verdadeiro");
  //echo nl2br ("\nO valor da variável Verdadeiro é: $falso");
  
  echo  ("O valor da variável Verdadeiro é:");
  var_dump($verdadeiro);
  echo nl2br ("\n");
  echo  ("O valor da variável falso é:");
  var_dump($falso);
  echo nl2br ("\n\n");
  $nome1 = "Paulo";
  $nome2 = "paulo";
  $nome3 = "Paulo";
  $numero1 = 10;
  $numero2 = 5;
  $numero3 = "10";
  $numero4 = 5;
              
              //Trabalhando operadores de comparação Igual
  echo("$nome1 == $nome2: ");
  var_dump(($nome1 == $nome2));
  echo nl2br ("\n$nome1 == $nome3: ");
  var_dump(($nome1 == $nome3));

              //Trabalhando operadores de comparação Diferente
  echo nl2br ("\n$nome1 != $nome2: ");
  var_dump(($nome1 != $nome2));
  echo nl2br ("\n$nome1 != $nome3: ");
  var_dump(($nome1 != $nome3));

              //Trabalhando operadores de comparação Menor que
  echo nl2br ("\n$numero1 < $numero2: ");
  var_dump(($numero1 < $numero2));
  echo nl2br ("\n$numero2 < $numero1: ");
  var_dump(($numero2 < $numero1));

             //Trabalhando operadores de comparação Maior ou Igual
  echo nl2br ("\n$numero1 >= $numero2: ");
  var_dump(($numero1 >= $numero2));
  echo nl2br ("\n$numero2 >= $numero4: ");
  var_dump(($numero2 >= $numero4));

             //Trabalhando operadores de comparação Idêntico e não Idêntico
  echo nl2br ("\n$numero1 === $numero3: ");
  var_dump(($numero1 === $numero3));
  echo nl2br ("\n$numero2 !== $numero4: ");
  var_dump(($numero2 !== $numero4));


?>