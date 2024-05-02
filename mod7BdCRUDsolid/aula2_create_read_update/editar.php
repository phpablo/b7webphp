<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');
$info = [];

if ($id) {

  $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();


  if ($sql->rowCount() > 0) {

    $info = $sql->fetch(PDO::FETCH_ASSOC);
  } else {
    header("Location: index.php");
    exit;
  }
} else {
  header("Location: index.php");
  exit;
}
?>
<h2>Editar Usuário</h2>

<form method="POST" action="editar_action.php">

  <label for="nome">
    Nome: <br>
    <input type="text" name="name" value="<?= $info['nome']; ?>">
  </label><br><br>

  <label for="nome">
    Email: <br>
    <input type="email" name="email" value="<?= $info['email']; ?>">
  </label><br><br>

  <input type="submit" value="Salvar">

</form>

<a href="index.php">VOLTAR</a>