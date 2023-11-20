<?php

$texto = 'Jão das Neves';

file_put_contents('nome.txt', $texto);

echo 'Arquivo criado com sucesso';


$texto = file_get_contents('texto.txt');
$texto .= "\nGOkun";
file_put_contents('texto.txt', $texto);
