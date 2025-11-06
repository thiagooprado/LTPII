<?php
   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo.css"
</head>

<body>
       <nav>
         <ul>
            <li> <a href="index.php"> home </a> </li>
            <li><a href="cadastrarProduto.php"> Cadastrar </a> </li>
            <li><a href="consultarProduto.php"> Consultar </a> </li>
          </ul>
       </nav>    

       <h1>CADASTRAR PRODUTOS</h1>    
       <form method="POST" action="cadastrarProdutoControl.php">
          <label> Valor Produto: </label>
          <input type="text" name= "nome"/>
          <br> <br>

          <label> Valor Produto: </label>
          <input type="text" name= "valor"/>
          <br> <br>

          <label> Quantidade Produto: </label>
          <input type="number" name= "quantidade"/>
          <br> <br>

          <label> Descição Produto: </label>
          <input type="text" name= "Descrição"/>
          <br> <br>

          <input type="submit" value="Cadastrar" name="btnCadastrar"/>

       </form>
</body>

</html>