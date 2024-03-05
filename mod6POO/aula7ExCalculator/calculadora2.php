<?php
class Calculadora {
  // Método para somar dois números
  public function somar($a, $b) {
    return $a + $b;
  }

  // Método para subtrair dois números
  public function subtrair($a, $b) {
    return $a - $b;
  }
}

// Uso da calculadora
$calc = new Calculadora();
echo "Soma: " . $calc->somar(5, 3) . "<br>";
echo "Subtração: " . $calc->subtrair(10, 4) . "<br>";
