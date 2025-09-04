<?php
$nota1 = 4;   
$nota2 = 4;   
$media = 5;   

$mediaFinal = ($nota1 + $nota2) / 2;

if($mediaFinal >= $media) {
    echo("Aluno Aprovado! Média: " . $mediaFinal);
} else {
    echo("Aluno Reprovado! Média: " . $mediaFinal);
}
?>

