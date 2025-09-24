<?php
if(!empty($_GET['numero']) && is_numeric($_GET['numero'])){
         $numero = $_GET['numero'];
         $cont = 0;
     do{
          echo nl2br(" O número foi : ".$numero."\n");
          $numero = $numero +1;
          $cont = $cont + 1;

     }while($cont < 5 );
}else{
    echo("Varíavel não setada ou vazia. Ou foi enviado Texto");
}

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
    <form>
        <label>Informe um Número:</label>
        <input type="text"name="numero"placeholder="Digite Aqui"/>
        <input type="submit" value="enviar"/>
    </form>
   </body>
   </html>
