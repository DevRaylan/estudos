<?php
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela1 WHERE ganhou >= 3 ";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $vetorRegistro = $resultado->fetch_array();

 $numerotricamp = $vetorRegistro[0];

 echo "<p> <span> Existe: $numerotricamp clube(s) </span> cadastrado(s) no banco de dados <br> com 3 ou + Vitorias nos Campeonatos nas estaduais</p>";