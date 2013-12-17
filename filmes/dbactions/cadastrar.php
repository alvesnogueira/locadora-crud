<?php

require_once(dirname(__DIR__) . '/../lib/connection.php');

$data = $_POST;

$sql = " INSERT INTO `filmes` ( `titulo`, `descricao`, `ano`) VALUES ( '$data[titulo]', '$data[descricao]', $data[ano])";
$conn->query($sql);