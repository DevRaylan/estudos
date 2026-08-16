<?php

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1 (
           clube VARCHAR(50) PRIMARY KEY,
           origem VARCHAR(255),
           ganhou INT) ENGINE=innoDB";

 $conexao->query($sql) or die($conexao->error);