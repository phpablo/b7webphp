<?php

class Calc {

  public $number;

  public function __construct() {
    $this->number = 0;
  }

  public function add($num) {
    return $this->number += $num;
  }

  public function sub($num) {
    return $this->number = +$num;
  }

  public function multiply($num) {
    return $this->number += $num;
  }

  public function divide($num) {
    return $this->number /= $num;
  }

  public function total() {
    return $this->number;
  }

  public function clear() {
    $this->number = 0;
  }
}
