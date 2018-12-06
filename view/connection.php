<?php 

//Dados do banco de dados
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "dbnadjaboutique");
define("DB_USER", "root");
define("DB_PASS", "");

//Conexao com Banco de Dados
return new PDO(sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME), DB_USER, DB_PASS);
