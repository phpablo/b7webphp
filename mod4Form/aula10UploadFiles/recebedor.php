<?php
// mostra content do files 
echo '<pre>';
print_r($_FILES);

// var recebe arquivo 
$nome = $_FILES['arquivo']['name'];
// move o arquivo do servidor temporario p/ pasta do sistema 
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/' . $nome);
