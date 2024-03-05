<?php
// Definindo uma interface
interface FormaGeometrica {
  // Métodos que devem ser implementados pelas classes que implementam esta interface
  public function calcularArea();
  public function calcularPerimetro();
}

// Implementação da interface em uma classe
class Quadrado implements FormaGeometrica {
  private $lado;

  // Construtor da classe
  public function __construct($lado) {
    $this->lado = $lado;
  }

  // Implementação do método para calcular a área de um quadrado
  public function calcularArea() {
    return $this->lado * $this->lado;
  }

  // Implementação do método para calcular o perímetro de um quadrado
  public function calcularPerimetro() {
    return 4 * $this->lado;
  }
}

// Implementação da interface em outra classe
class Circulo implements FormaGeometrica {
  private $raio;

  // Construtor da classe
  public function __construct($raio) {
    $this->raio = $raio;
  }

  // Implementação do método para calcular a área de um círculo
  public function calcularArea() {
    return pi() * $this->raio * $this->raio;
  }

  // Implementação do método para calcular o perímetro de um círculo
  public function calcularPerimetro() {
    return 2 * pi() * $this->raio;
  }
}

// Uso das classes que implementam a interface
$quadrado = new Quadrado(5);
echo "Área do quadrado: " . $quadrado->calcularArea() . "<br>";
echo "Perímetro do quadrado: " . $quadrado->calcularPerimetro() . "<br>";

$circulo = new Circulo(3);
echo "Área do círculo: " . $circulo->calcularArea() . "<br>";
echo "Perímetro do círculo: " . $circulo->calcularPerimetro() . "<br>";
