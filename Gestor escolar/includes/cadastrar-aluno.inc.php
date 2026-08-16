<?php
 $aluno      = trim($conexao->escape_string($_POST['nome-aluno']));
 $matricula  = trim($conexao->escape_string($_POST['matricula']));

 $sql = "INSERT $nomeDaTabela1 VALUES(
                '$matricula', 
                '$aluno')";

 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados do aluno cadastrados com sucesso no banco de dados. </p>";


