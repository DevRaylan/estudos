<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Vetores - resposta do servidor </h1>

 <?php
  define("TAXA_DESCONTO", 5/100);

  $vetorPreco = ["Dipirona"     => 8.00,
                 "Rivotril"     => 40.00,
                 "Loratadina"   => 15.50];

  if(!isset($_POST['produtos']))
   {
    exit("<p> Caro cliente, você não adquiriu nenhum medicamento de nossa farmácia virtual. O valor final da compra é R$0,00. Volte sempre! </p>");
   }

  $vetorRemediosComprados = $_POST['produtos'];

  $total = 0;

  foreach($vetorRemediosComprados as $nomeRemedio)
   {
    $total = $total + $vetorPreco[$nomeRemedio];
   }

  $desconto = 0;

  if(isset($_POST['faixa-etaria']))
   {
   $desconto = $total * TAXA_DESCONTO;
   }
  
  $total = $total - $desconto;

  $totalFormatado = number_format($total, 2, ",", ".");

  echo "<p> Caro usuário, de acordo com os medicamentos adquiridos, o valor final da sua compra é de: <span> $totalFormatado </span> </p>";

  echo "<br> <p> Lista de remédios adquiridos: <br>";

  foreach($vetorRemediosComprados as $nomeRemedio)
   {
    echo "$nomeRemedio <br>";
   }

  echo "</p>";

 ?>
</body> 
</html> 