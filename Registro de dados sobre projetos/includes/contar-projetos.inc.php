<?php
 $dataIP  = trim($conexao->escape_string($_POST['pdata']));
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela1 WHERE dataInicio >= '$dataIP'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $vetorRegistro = $resultado->fetch_array();

 $numeroProjetos = $vetorRegistro[0];

 echo "<p> <span> $numeroProjetos Projetos </span> cadastrados no banco de dados </p>";