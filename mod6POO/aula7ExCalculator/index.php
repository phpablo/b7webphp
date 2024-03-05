<?php
require 'calculadora.php';

$calc = new Calc();
echo '<hr>';
echo $calc->add(12);
echo '<br/>';
echo $calc->add(2);
echo '<br/>';
echo $calc->sub(1);
echo '<br/>';
echo $calc->divide(1);
echo '<br/>';
echo $calc->multiply(3);
echo '<br/>';
echo $calc->divide(2);
echo '<br/>';
echo $calc->add(0.5);
echo '<br/>';
echo '<hr>';
echo 'TOTAL: ' . $calc->total();
// $calc->clear();