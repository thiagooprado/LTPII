<?php
     $dsn="mysql:host=localhost;dbname=turmaj";
     $usuario="root";
     $senha="";

     try{
        $conexao = new PDO($dsn,$usuario,$senha);
        echo "Conexão com banco de dados realizada!";

     }catch(PDOException $erro){
        echo "Não foi possível se conectar com o banco" .$erro->getMessage();

     }

?>