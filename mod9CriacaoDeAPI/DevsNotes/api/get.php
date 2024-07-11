<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'get') {

  $id = filter_input(INPUT_GET, 'id');
  $sql = $pdo->prepare("SELECT * FROM notes WHERE id= :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

  if ($id) {

    if ($sql->rowCount() > 0) {
      $data = $sql->fetch(PDO::FETCH_ASSOC);
      $array['result'] = [
        'id'    => $data['id'],
        'title' => $data['title'],
        'body'  => $data['body']
      ];
    } else {

      $array['error'] = 'ID Não Inexistente';
    }
  } else {

    $array['error'] = 'ID não enviado!';
  }
} else {

  $array['error'] = "Método não permitido!( Apenas GET )";
}

require('../return.php');
