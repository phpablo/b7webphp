<?php

$pdo = new PDO('mysql:dbname=test;host=localhost', 'root', '');

$sql = $pdo->query('SELECT * FROM usuario');

echo 'Total: ' . $sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);
echo '</pre>';
exit;
