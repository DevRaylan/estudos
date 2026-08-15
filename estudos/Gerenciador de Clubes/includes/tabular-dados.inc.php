<?php
 $sql = "SELECT * FROM $nomeDaTabela1";

 $resultado = $conexao->query($sql) or die($conexao->error);

 echo "<table> 
        <caption> Relação de projetos cadastrados no banco de dados </caption>
        <tr>
         <th> Clube </th>
         <th> Origem </th>
         <th> Foi campeão pelo seu estado:  </th>
        </tr>";

 while($vetorRegistro = $resultado->fetch_array())
  {
  $clube = $vetorRegistro[0];
  $origem = $vetorRegistro[1];
  $ganhou  = $vetorRegistro[2];

  $clube = htmlentities($clube, ENT_QUOTES, "UTF-8");
  $origem  = htmlentities($origem, ENT_QUOTES, "UTF-8");
  $ganhou  = htmlentities($ganhou, ENT_QUOTES, "UTF-8");

  echo "<tr>
         <td> $clube </td>
         <td> $origem </td>
         <td> $ganhou </td>
        </tr>";
  }

 echo "</table>";
