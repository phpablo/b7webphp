<?php
class A {

  public function getNome() {
    return 'Meu nome é A';
  }
}

class B extends A {

  public function getNome() {

    return 'Meu nome é B';
  }
}

function printName(A $obj) {
  return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo printName($objeto2);
