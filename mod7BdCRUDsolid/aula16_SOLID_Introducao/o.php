<?php

// Conceito Open-Closed -> Classes devem ser abertas para extensão, mas fechadas para modificação.

interface Remuneravel {

  public function remuneracao();
}

class ContratoCLT implements Remuneravel {

  public function remuneracao() {
  }
}

class Estagio implements Remuneravel {

  public function remuneracao() {
  }
}

class FolhaPagamento {

  public function calcular(Remuneravel $funcionario) {

    return $funcionario->remuneracao();
  }
}

// Desse jeito, toda vez que precisar criar uma nova classe
// Terei de implementar mais condicionais aninhadas
// gerando confusão no código 

// class ContratoCLT {

//   public function calcularSalario() {
//   }
// }

// class Estagio {

//   public function bolsaAuxilio() {
//   }
// }

// class FolhaPagamento {

//   public function calcular($funcionario) {

//     $salario = 0;

//     if ($funcionario instanceof ContratoCLT) {
//       $salario = $funcionario->calcularSalario();
//     } else {
//       $salario = $funcionario->bolsaAuxilio();
//     }

//     return $salario;
//   }
// }
