<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
  <h1> Gerenciador de projetos </h1>

  <form action="gerenciadorP.php" method="post">
   <fieldset>
    <legend> Cadastro de Projetos </legend>

    <label class="alinha"> ID do projeto: </label>
    <input type="text" name="id" autofocus placeholder="Forneça o id do projeto"> <br>

    <label class="alinha"> Nome: </label>
    <input type="text" name="projeto"> <br>

    <label class="alinha"> Valor do orçamento R$: </label>
    <input type="number" name="orcamento" min="0" step="0.01"> <br>

    <label class="alinha"> Data da Início: </label>
    <input type="date" name="dataInicio"> <br>

    <label class="alinha"> Quantidade de horas para execução do projeto: </label>
    <input type="number" name="hrs" min="0" step="0.01"> <br>

    <button name="cadastra-projeto"> Cadastrar projeto </button>
    <button name="tabular"> Mostrar todos os projetos </button>
  </fieldset>

  <fieldset>
    <legend> Consulta ao banco de dados </legend>

    <label class="alinha"> Forneça a data: </label>
    <input type="date" name="pdata"> <br>
    
    <button name="contar"> Mostrar projetos </button>
  </fieldset>  

  <fieldset>
    <legend> EXCLUIR PROJETOS </legend>

    <label class="alinha"> Quantidade de horas menor que: </label>
    <input type="number" name="Xhrs" min="0" step="0.01"> <br>

    <label class="alinha"> Valor menor que R$: </label>
    <input type="number" name="XValor" min="0" step="0.01"> <br>
    
    <button name="EXCLUIR"> EXCLUIR PROJETOS </button>
  </fieldset> 

  </form>
  
  <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-charset.inc.php";
   require "../includes/criar-tabelas.inc.php";

   if(isset($_POST['cadastra-projeto']))
    {
    require "../includes/cadastrar-projeto.inc.php";
    }

    if(isset($_POST['tabular']))
    {
    require "../includes/tabular-dados.inc.php";
    }

    if(isset($_POST['contar']))
    {
    require "../includes/contar-projetos.inc.php";
    }

    if(isset($_POST['EXCLUIR']))
    {
    require "../includes/excluir-projetos.inc.php";
    }

  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 