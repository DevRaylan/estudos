<?php
 $Xhrs  = trim($conexao->escape_string($_POST['Xhrs']));
 $XValor = trim($conexao->escape_string($_POST['XValor']));

 $sql = "DELETE FROM $nomeDaTabela1 WHERE hrs < '$Xhrs'AND orcamento < '$XValor'";

 $resultado = $conexao->query($sql) or die($conexao->error);

  if($conexao->affected_rows == 0)
   {
   echo "<p> Caro usuário, nenhum projeto foi excluído do banco de dados. </p>";
   }
  else
  {
   echo "<p> Caro usuário, de acordo com os dados fornecidos, o banco de dados excluiu um total de <span> $conexao->affected_rows </span> projetos que continham valor e horas a cima, continuam cadastrados </p>";
   }