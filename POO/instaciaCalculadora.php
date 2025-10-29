<?php
    include_once 'Calculadora.php';
    $calcular = new Calculadora(10, 20);
    $calcular->somaNumeros();
    $calcular->subtracaoNumeros();
    $calcular->multiplicacaoNumeros();
    $calcular->divisaoNumeros();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Calculadora</h3>
    
    <form>
        <input type="number" name="numero1" placeholder="Digite o 1° número">
        <br><br>
        <input type="number" name="numero1" placeholder="Digite o 2° número">
        <br><br>
        <input type="submit" value="+" name="">
        <input type="submit" value="-" name="">
        <input type="submit" value="X" name="">
        <input type="submit" value="÷" name="">
    </form>
</body>
</html>