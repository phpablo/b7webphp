<?php
$texto = file_get_contents('texto.txt');
$texto = explode(' ', $texto);

echo 'Linhas: ' . count($texto);
