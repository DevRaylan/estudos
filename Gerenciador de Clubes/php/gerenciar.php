<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
  <h1> GERENCIAMENTO DE CLUBES </h1>

  <form action="gerenciar.php" method="post">
   <fieldset>
    <legend> Cadastro de dados - Clubes de futebol </legend>

    <label class="alinha"> Nome do Clube esportivo: </label>
    <input type="text" name="clube" autofocus placeholder="Forneça o nome do Clube"> <br>

    <label class="alinha"> Estado de Origem: </label>
    <input type="text" name="origem"> <br>

    <label class="alinha"> Quantidade de vezes em que o time de futebol ja foi campeão pelo seu estado: </label>
    <input type="number" name="ganhou" min="0" step="0.01"> <br>

    <button name="cadastra-dados"> Cadastrar dados do Clube </button>
    <button name="tabular"> Mostrar todos os Clubes </button>
    <button name="contar"> Mostrar Quantidade de Tricampeões </button>
  </fieldset>

  </form>
  
  <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-charset.inc.php";
   require "../includes/criar-tabelas.inc.php";

   if(isset($_POST['cadastra-dados']))
    {
    require "../includes/cadastrar-clube.inc.php";
    }

    if(isset($_POST['tabular']))
    {
    require "../includes/tabular-dados.inc.php";
    }

    if(isset($_POST['contar']))
    {
    require "../includes/contar-tricamp.inc.php";
    }

  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 