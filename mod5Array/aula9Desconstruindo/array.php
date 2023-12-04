<!--Desconstruir um array, separa em varíaveis separadas .Usa a função LIst para listar o conteúdo do array -->
<?php
$array = ['Pablo', 22,'café','jogar valorant'];

list($nome,$idade,$bebida,$lazer) = $array;

echo '<pre>';
echo "Meu nome é $nome eu tenho $idade anos, bebo $bebida e no lazer gosto de $lazer";
?>