<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - listaL1 - exercício 6 - resposta do servidor </h1>

 <?php
  $valorCompra = $_POST["valor-compra"];
  $percentComissao = $_POST["percent-comissao"];

  $comissao = $valorCompra * $percentComissao/100;

  echo "<p> De acordo com os dados fornecidos, o valor final da comissão do vendedor é de <span> R$$comissao </span> </p>";
 ?>
</body> 
</html> 