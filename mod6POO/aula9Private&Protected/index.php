<?php
class MinhaClasse {
  private $privado = "Variável privada";
  protected $protegido = "Variável protegida";

  // Método para acessar a variável privada
  public function getPrivado() {
    return $this->privado;
  }

  // Método para acessar a variável protegida
  public function getProtegido() {
    return $this->protegido;
  }
}

// Uso da classe
$objeto = new MinhaClasse();

// Tentativa de acessar diretamente as variáveis privada e protegida (resultará em erro)
// echo $objeto->privado; // Erro: Cannot access private property
// echo $objeto->protegido; // Erro: Cannot access protected property

// Acesso por meio dos métodos públicos
echo $objeto->getPrivado() . "<br>";
echo $objeto->getProtegido() . "<br>";
