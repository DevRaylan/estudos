<?php
 $clube      = trim($conexao->escape_string($_POST['clube']));
 $origem  = trim($conexao->escape_string($_POST['origem']));
 $ganhou  = trim($conexao->escape_string($_POST['ganhou']));

 $sql = "INSERT $nomeDaTabela1 VALUES(
                '$clube', 
                '$origem',
                 $ganhou)";

 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados do Clube cadastrados com sucesso no banco de dados. </p>";

