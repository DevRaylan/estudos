<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1 (
           matricula VARCHAR(20) PRIMARY KEY,
           nome VARCHAR(500)) ENGINE=innoDB"; 

 $conexao->query($sql) or die($conexao->error);

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2 (
           codigo VARCHAR(300) PRIMARY KEY,
           uc VARCHAR(500),
           matricula_aluno VARCHAR(20),
           FOREIGN KEY(matricula_aluno)
           REFERENCES $nomeDaTabela1(matricula)) ENGINE=innoDB";

 $conexao->query($sql) or die($conexao->error);