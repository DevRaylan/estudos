<?php
 $id      = trim($conexao->escape_string($_POST['id']));
 $projeto  = trim($conexao->escape_string($_POST['projeto']));
 $orcamento  = trim($conexao->escape_string($_POST['orcamento']));
 $dataInicio  = trim($conexao->escape_string($_POST['dataInicio']));
 $hrs  = trim($conexao->escape_string($_POST['hrs']));

 $sql = "INSERT $nomeDaTabela1 VALUES(
                '$id', 
                '$projeto',
                 $orcamento,
                '$dataInicio',
                '$hrs')";

 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados do projeto cadastrados com sucesso no banco de dados. </p>";


