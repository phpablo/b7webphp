<?php
interface Aves {

  public function setLocation($lat, $long);
  public function render();
}

interface AvesQueVoam extends Aves {

  public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam {

  public function setLocation($lat, $long) {
  }
  public function setAltitude($alt) {
  }

  public function render() {
  }
}

class Pinguim implements Aves {

  public function setLocation($lat, $long) {
  }
  public function render() {
  }
}
