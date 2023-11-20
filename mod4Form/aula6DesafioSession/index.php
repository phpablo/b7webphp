<?php
session_start();
$nome = filter_input(INPUT_GET, 'nome');

if (isset($nome)) {
  $_SESSION['nome'] = $nome;
  echo 'Olá, <strong>' . $nome . '</strong><br/></br>';
  echo '<a href="sair.php">[SAIR]</a>';
} else {
  header('Location: login.php');
}
