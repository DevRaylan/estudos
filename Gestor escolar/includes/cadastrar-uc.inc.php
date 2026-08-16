<?php
 $uc               = trim($conexao->escape_string($_POST['nome-uc']));
 $codigo           = trim($conexao->escape_string($_POST['codigo-uc']));
 $matriculaDoAluno = trim($conexao->escape_string($_POST['matricula-uc']));

 $sql = "SELECT matricula FROM $nomeDaTabela1 WHERE matricula = '$matriculaDoAluno'";

 $conexao->query($sql) or die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  exit("<p> A matrícula do aluno fornecida para o cadastro desta UC não consta de nosso banco de dados. Tente novamente! </p>");
  }

 $sql = "INSERT $nomeDaTabela2 VALUES(
                '$codigo',
                '$uc',
                '$matriculaDoAluno')";

 $conexao->query($sql) or die($conexao->error);

 echo "<p> Dados da unidade curricular cadastrados com sucesso no banco de dados. </p>";
