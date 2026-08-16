<?php

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1 (
           id INT PRIMARY KEY,
           projeto VARCHAR(500),
           orcamento INT,
           dataInicio DATE,
           hrs INT)ENGINE=innoDB";

 $conexao->query($sql) or die($conexao->error);