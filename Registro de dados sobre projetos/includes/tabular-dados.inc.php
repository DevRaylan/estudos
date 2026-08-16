<?php
 $sql = "SELECT * FROM $nomeDaTabela1";
 $resultado = $conexao->query($sql) or die($conexao->error);
 echo "<table> 
        <caption> Relação de projetos cadastrados no banco de dados </caption>
        <tr>
         <th> ID </th>
         <th> Projeto </th>
         <th> Orcamento R$: </th>
         <th> Data de Início </th>
        </tr>";

 while($vetorRegistro = $resultado->fetch_array())
  {
  $id = $vetorRegistro[0];
  $projeto = $vetorRegistro[1];
  $orcamento  = $vetorRegistro[2];
  $dataInicio  = $vetorRegistro[3];

  $id = htmlentities($id, ENT_QUOTES, "UTF-8");
  $projeto  = htmlentities($projeto, ENT_QUOTES, "UTF-8");
  $orcamento  = htmlentities($orcamento, ENT_QUOTES, "UTF-8");
  $dataInicio  = htmlentities($dataInicio, ENT_QUOTES, "UTF-8");

  echo "<tr>
         <td> $id </td>
         <td> $projeto </td>
         <td> $orcamento </td>
         <td> $dataInicio </td>
        </tr>";
  }

 echo "</table>";
