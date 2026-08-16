<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP  </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
  <h1> Gestor de dados estudantil </h1>

  <form action="Gestor.php" method="post">
   <fieldset>
    <legend> Cadastro de alunos </legend>
    <label class="alinha"> Nome: </label>
    <input type="text" name="nome-aluno" autofocus placeholder="Forneça o nome do aluno"> <br>

    <label class="alinha"> Matrícula: </label>
    <input type="text" name="matricula"> <br>

    <button name="cadastra-aluno"> Cadastrar aluno </button>
   </fieldset>

   <fieldset>
    <legend> Cadastro de unidades curriculares </legend>

    <label class="alinha"> Nome: </label>
    <input type="text" name="nome-uc" placeholder="Forneça o nome da UC"> <br>

    <label class="alinha"> Código da UC: </label>
    <input type="text" name="codigo-uc"> <br>

    <label class="alinha"> Matrícula do aluno para esta UC: </label>
    <input type="text" name="matricula-uc"> <br>

    <button name="cadastra-uc"> Cadastrar unidade curricular </button>
   </fieldset>

   <fieldset>
    <legend> Pesquisa pelo nome do aluno </legend>

    <label class="alinha"> Nome do aluno pesquisado: </label>
    <input type="text" name="pesquisa-nome-aluno"> <br>
    
    <button name="pesquisar-aluno"> Pesquisar pelo nome do aluno </button>
   </fieldset>
   </form>
  
  <?php
   require "../includes/dados-conexao.inc.php";
   require "../includes/conectar.inc.php";
   require "../includes/criar-banco.inc.php";
   require "../includes/abrir-banco.inc.php";
   require "../includes/definir-charset.inc.php";
   require "../includes/criar-tabelas.inc.php";

   if(isset($_POST['cadastra-aluno']))
    {
    require "../includes/cadastrar-aluno.inc.php";
    }

   if(isset($_POST['cadastra-uc']))
    {
    require "../includes/cadastrar-uc.inc.php";
    }

   if(isset($_POST["pesquisar-aluno"]))
    {
    require "../includes/pesquisar-aluno.inc.php";
    }

  require "../includes/desconectar.inc.php";  
  ?>
</body> 
</html> 