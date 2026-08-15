<?php
 $nomeAluno    = trim($conexao->escape_string($_POST['pesquisa-nome-aluno']));

 $sql = "SELECT matricula FROM $nomeDaTabela1 WHERE nome = '$nomeAluno'";
 $resultado = $conexao->query($sql) or die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  exit("<p> Caro usuário, o nome do aluno pesquisado não se encontra em nosso banco de dados. Tente novamente! </p>");
  }

 $vetorRegistro = $resultado->fetch_array();
 $matriculaProcurada = $vetorRegistro[0];

 $sql = "SELECT codigo, uc FROM $nomeDaTabela2 WHERE matricula_aluno = '$matriculaProcurada'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  exit("<p> O aluno que você pesquisou existe em nosso banco de dados, mas não frequenta nenhuma unidade curricular neste semestre. </p>");
  }

 echo "<table>
        <caption> Dados das UC frequentadas pelo aluno <span> $nomeAluno </span> </caption>
        <tr>
         <th> Código da UC </th>
         <th> Nome da UC </th>
        </tr>";

 while($vetorRegistro = $resultado->fetch_array())
  {
   $codigo = htmlentities($vetorRegistro[0], ENT_QUOTES, "utf-8");
   $uc     = htmlentities($vetorRegistro[1], ENT_QUOTES, "utf-8");

   echo "<tr>
          <td> $codigo </td>
          <td> $uc </td>
         </tr>";
  }
 echo "</table>";