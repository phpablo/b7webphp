<?php
// mostra content do files 
echo '<pre>';
print_r($_FILES);

// var recebe arquivo 
// $nome = $_FILES['arquivo']['name'];

// verifica os tipos permitidos de imagens 
if (in_array($_FILES['arquivo']['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {
  // renomeia o arquivo com nome aleatorio 
  $nome = md5(time() . rand(0, 100)) . '.jpg';
  // move o arquivo do servidor temporario p/ pasta do sistema 
  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/' . $nome);
  echo 'Arquivo salvo com sucesso!';
} else {
  echo 'Arquivo não permitido!';
}
