<?php
// inicia uma sessão 
session_start();
require 'header.php';
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
// valida os dados do form 
if ($nome && $idade && $email) {
  // seta param do cookie 
  $exp = time() + (86400 * 30);
  setcookie('nome', $nome, $exp);

  echo '<hr/>';
  echo 'NOME: ' . $nome . '<br/>';
  echo 'IDADE: ' . $idade . '<br/>';
  echo 'EMAIL: ' . $email . '<br/>';
  echo '<hr/>';
} else {
  // sem param, redirect p/ index 
  $_SESSION['aviso'] = '[[[ Preencha todos os campos ]]] ';
  header('Location: index.php');
  exit;
}
