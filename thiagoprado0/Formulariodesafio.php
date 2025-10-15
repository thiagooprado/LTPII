<?php 

require 'teste.php';

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
<form method="post" action="teste.php">
    <label> Digite Um Nome: <Label>

    <input type="text" name="nome" value = "<?php echo((!empty($_POST['nome']))); ?>"required > <br>  <br> 
    <label> Informe Seu E-Mail: <Label>
    <input type="email" name="email" value = "<?php echo((isset($_POST['email'])&& (!empty($_POST['email'])))); ?> "id="email" required > <br> <br> 
    <label> Selecione Ano Escolariedade:  <Label>
<?php foreach($ano as $ano) { ?> <br>
    <input type="radio" name="ano" value = "<?php echo(" $ano "); ?>"required /> 
    <label> <?php echo ("$ano"); }?>  <label> <br>  <br> 

    <label> Selecione a(s) Sua(s) Disciplina(s): <Label>
    <?php foreach($disciplinas as $disciplina) { ?> 
    <input type="checkbox" name="disciplinas[]" value = "<?php echo(" $disciplina "); ?>" />     
    <label> <?php echo ("$disciplina"); }?>  </label>
    <br> <br>





    <label> Escolha a sua Cidade: <Label>
    <select name="cidade">
    <option value=""> ㅤㅤㅤㅤㅤㅤㅤ</option required>
    <?php foreach ($cidade as $cidade) { 
        echo"<option value='$cidade'>$cidade,</option>"; ?> <?php } ?>
        <select > <br> <br>

        <input type= "submit" value="Enviar">
    </form>
    





</body>
</html>