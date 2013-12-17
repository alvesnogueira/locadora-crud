<?php

//PDO - PHP Data Object
//CRUD - Create / Read / Update / Delete

$dsn  = "mysql:dbname=locadora;host=localhost;port=3306;";
$conn = new PDO($dsn, 'root', 'localpass', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
//define para que o PDO lance exceções na ocorrência de erros
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);