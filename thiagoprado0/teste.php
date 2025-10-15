<?php

$ano = ['1° Ano', '2° Ano', '3° Ano'];

$disciplinas = ['Português', ' Matemática', 'Biologia ', 'Filosofia', 'Física ','Química '];

$cidade = ['São Paulo', 'Brasília', 'Minas Gerais', 'Rio De Janeiro'];

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (  !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST ['ano']) && !empty($_POST['disciplinas']) && !empty($_POST['cidade']) !='' ) {

        $nome = $_POST['nome'];

        $email = $_POST['email'];

        $ano = $_POST['ano'];

        $disciplinas = $_POST['disciplinas'];

        $cidade = $_POST['cidade'];


        echo ("Seu Nome é: $nome ");

        echo nl2br ("\nE-Mail: $email ");

        echo nl2br ("\nSua escolaridade é: $ano ");

        echo nl2br ("\nVocê escolheu a(s) Disciplina(s): ");

        foreach($disciplinas as $disciplina) {
            
            echo(" $disciplina "); }
        
            echo nl2br ("\n Você é da Cidade de : $cidade");

    }
    else {echo ("Preencha Todos Os Campos"); }


 }

?>
