<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <form action="controle.php" method="post">

  <!--dados do medicamento 1-->
  <fieldset>
   <legend> Famácia - Controle de Vendas </legend>

   <label class="alinha"> Nome do Medicamento: </label>
   <input type="text" name="nome1" autofocus> <br>

   <label class="alinha"> Código do Medicamento: </label>
   <input type="text" name="cod1"> <br>

   <label class="alinha"> Preço do medicamento: </label>
   <input type="number" name="preco1" min="0" step="0.01"> <br>
  </fieldset> 

  <!--dados do medicamento 2-->
  <fieldset>
   <legend> Famácias AAA - controle de vendas </legend>

   <label class="alinha"> Nome do medicamento: </label>
   <input type="text" name="nome2"> <br>

   <label class="alinha"> Código do medicamento: </label>
   <input type="text" name="cod2"> <br>

   <label class="alinha"> Preço do medicamento: </label>
   <input type="number" name="preco2" min="0" step="0.01"> <br>
  </fieldset> 

  <!--dados do medicamento 3-->
  <fieldset>
   <legend> Famácias AAA - controle de vendas </legend>

   <label class="alinha"> Nome do medicamento: </label>
   <input type="text" name="nome3"> <br>

   <label class="alinha"> Código do medicamento: </label>
   <input type="text" name="cod3"> <br>

   <label class="alinha"> Preço do medicamento: </label>
   <input type="number" name="preco3" min="0" step="0.01"> <br>
  </fieldset>

    <!--dados da pesquisa-->
  <fieldset>
   <legend> Famácias AAA - controle de vendas </legend>

   <label class="alinha"> Código do remédio para a pesquisa: </label>
   <input type="text" name="codigo-pesquisa">
  </fieldset>
  
  <button name="enviar-dados"> Processar dados da venda </button>
  </fieldset>
 </form>

 <?php
   if(isset($_POST['enviar-dados']))
   {
   $cod1       = $_POST['cod1'];
   $cod2       = $_POST['cod2'];
   $cod3       = $_POST['cod3'];

   $nome1       = $_POST["nome1"];
   $nome2       = $_POST["nome2"];
   $nome3       = $_POST["nome3"];

   $preco1     = $_POST["preco1"];
   $preco2     = $_POST["preco2"];
   $preco3     = $_POST["preco3"];


   $matrizRemedios = [$cod1 => [$nome1, $preco1],
                      $cod2 => [$nome2, $preco2],
                      $cod3 => [$nome3, $preco3]];

   echo "<table>
    <caption> Relação dos dados dos medicamentos cadastrados </caption>
    <tr>
      <th> Código do medicamento </th>
      <th> Nome do medicamento </th>
      <th> Preço do medicamento </th>
    </tr>";

   foreach($matrizRemedios as $cod => $vetorInterno)
    {
    echo "<tr>
            <td> $cod </td>
            <td> $vetorInterno[0] </td>
            <td> $vetorInterno[1] </td>
          </tr>";
    }  
    echo "</table>";

  foreach($matrizRemedios as $cod => $vetorInterno)
    {
    $vetorTemporarioPrecos[$cod] = $vetorInterno[1] ;  
    }

  $menorPreco = min($vetorTemporarioPrecos);
  $codRemedioMaisBarato = array_search($menorPreco, $vetorTemporarioPrecos);
  $nomeRemedioMaisBarato = $matrizRemedios[$codRemedioMaisBarato][0];

   echo "<p> Dados do remédio mais barato cadastrado na matriz: <br>
             Código = <span> $codRemedioMaisBarato </span> <br>
             Nome do remédio = <span> $nomeRemedioMaisBarato </span> <br>
             Preço do remédio mais barato = <span> $menorPreco </span></p>";  
            

   $remedioPesquisado = $_POST['codigo-pesquisa'];

   $encontrouRemedio = array_key_exists($remedioPesquisado, $matrizRemedios);


    if(!$encontrouRemedio)
     {
     echo "<p> O remédio com o código pesquisado, <span> $remedioPesquisado </span>, não está cadastrado na matriz. </p>";
     }
    else
     {
     $precoRemedioPesquisado = $matrizRemedios[$remedioPesquisado][1];
     $nomeRemedioPesquisado = $matrizRemedios[$remedioPesquisado][0];

     echo "<p> Dados do remédio pesquisado: <br>
               Nome = <span> $nomeRemedioPesquisado </span> <br>
               Código = <span> $remedioPesquisado </span> <br>
               Preço do remédio pesquisado = <span> $precoRemedioPesquisado </span> </p>";
     }
    

   foreach ($matrizRemedios as $cod => $vetorInterno)
    {
    $vetorNomes[$cod] = $vetorInterno[0];
    }

   asort($vetorNomes);

   echo "<table>
          <caption> Dados dos remédios ordenados pelo nome </cpation>
          <tr>
           <th> Código </th>
           <th> Medicamento </th>
           <th> Preço </th>
          </tr>";

   foreach($vetorNomes as $cod => $nomeRemedio)
    {
    $preco = $matrizRemedios[$cod][1];
    echo "<tr>
           <td> $cod </td>
           <td> $nomeRemedio </td>
           <td> $preco </td>
          </tr>";
    }
   echo "</table>";
   }
 ?>
</body> 
</html> 