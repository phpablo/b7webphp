<?php
$user = file_get_contents('nome');
$name = file_put_contents('nome', $user);

// echo '<ul><li>' . $name . '</li></ul>';


if (isset($_GET['nome'])) {
  $nome = trim($_GET['nome']);
  if (!empty($nome)) {
    file_put_contents('usuarios.txt', $nome . PHP_EOL, FILE_APPEND | LOCK_EX);
  }
}

header('Location: index.php');



// header('Location: index.php');
// if ($user) {
  //   echo '<ul><li>' . $user . '</li></ul><br/>';
  // } else {
//   echo 'Algum erro encontrado';
// }