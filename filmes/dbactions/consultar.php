<?php

require_once(dirname(__DIR__) . '/../lib/connection.php');

$sql = " SELECT * FROM `filmes`";
$stmt = $conn->query($sql);

return $stmt->fetchAll();