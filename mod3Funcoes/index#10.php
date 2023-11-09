<?php
echo"<h1>Lista das funções String apresentadas nesta aula:</h1>";

echo"<b>Função para remover espaços</b> <br/>";
$nomeSujo = ' PHPablo     ';
$nomeLimpo = trim($nomeSujo);
echo $nomeLimpo;
echo"<hr/>";

echo"<b>Função contar a quantidades de caracteres em uma string</b> <br/>";
$nomeSujo = ' Pablo Henrique ';
$nomeLimpo = strlen($nomeSujo); //Observação: A funçao strlen conta a quantidade de espaços tambem.
echo $nomeLimpo;
echo"<hr/>";

echo"<b>Função que transforma a string TODA EM MINÚSCULA</b> <br/>";
$nomeMaiusculo = 'PABLO';
echo strToLower($nomeMaiusculo);
echo"<hr/>";

echo"<b>Função que transforma a string TODA EM MAIUSCULA</b> <br/>";
$nomeMaiusculo = 'pABLO';
echo strtoupper($nomeMaiusculo);
echo"<hr/>";

echo"<b>Função que SUBSTITUI palavras dentro da frase por exemplo</b> <br/>";
$nomeCompleto = 'Pablo Gohan';
$nomeAlterado = str_replace('Potter', 'Silva', $nomeCompleto);
echo"Antes: ".$nomeCompleto ."<br/>";
echo"Antes: ".$nomeAlterado;
echo"<hr/>";

echo"<b>Função que PEGA AS 3 PRIMEIRAS CARACTERES da palavra</b> <br/>";
$nomeCompleto = 'Pablo Henrique';
$nomeAlterado = substr($nomeCompleto, 0, 9);
echo $nomeAlterado;
echo"<hr/>";



?>