<?php
session_start();
require 'header.php';
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

if ($nome && $idade && $email) {
  echo '<hr/>';
  echo 'NOME: ' . $nome . '<br/>';
  echo 'IDADE: ' . $idade . '<br/>';
  echo 'EMAIL: ' . $email . '<br/>';
  echo '<hr/>';
} else {
  $_SESSION['aviso'] = '[[[ Preencha todos os campos ]]] ';
  header('Location: index.php');
  exit;
}
