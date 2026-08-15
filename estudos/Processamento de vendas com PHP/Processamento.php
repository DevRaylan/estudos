<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> Fundamentos do PHP - resposta do servidor </h1>

 <?php
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);

  $valorCompra = $_POST['valor-compra'];

  $escolheuModalidadePagamento = isset($_POST['modalidade-pagamento']);

  if(!$escolheuModalidadePagamento)
   {
   exit("<p> AVISO: você deve escolher a forma de pagamento: à vista ou a prazo - aplicação encerrada! </p>");
   }

  $modalidadePagamento = $_POST['modalidade-pagamento'];

  $acrescimo = 0;
  $desconto  = 0;

  if($modalidadePagamento == "à vista")
   {
   $desconto = $valorCompra * TAXA_DESCONTO;   
   }
  else
   {
   $acrescimo = $valorCompra * TAXA_ACRESCIMO;
   }

   $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  
  $escolheuPagamentoCartao = isset($_POST['pagamento-cartao']);

  if($escolheuPagamentoCartao)
   {
   $sorteio = "O cliente pagou com cartão bandeira Visa. Portanto, <span> está apto a participar do sorteio. </span>";
   }
  else
   {
   $sorteio = "O cliente NÃO pagou com cartão bandeira Visa. Portanto, <span> NÃO está apto a participar do sorteio. </span>"; 
   }

  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

  echo "<p> Resultado do processamento da venda efetuada: <br>
            Valor final da compra = <span> R$$valorFinalCompraFormatado </span> <br>
            $sorteio </p>";
  ?>
</body> 
</html> 