<?php
// Classe Pai
class Animal {
  protected $nome;

  public function __construct($nome) {
    $this->nome = $nome;
  }

  public function emitirSom() {
    echo "Som genérico de animal.<br>";
  }
}

// Classe Filha que herda de Animal
class Gato extends Animal {
  public function emitirSom() {
    echo "Miau!<br>";
  }
}

// Uso das classes
$animalGenerico = new Animal("Animal Genérico");
$gato = new Gato("Meu Gato");

$animalGenerico->emitirSom();
$gato->emitirSom();
