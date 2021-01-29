<?php
  //Create an example of use for arithmetic operators: +, -, *, /, and%
  $a=3;
  $b=5;
  echo $a + $b;
  echo $a - $b;
  echo $a * $b;
  echo $a / $b;
  echo $a % $b;
  //Create a usage example for comparison operators: ==,! =, <,>, <=,> =
  var_dump($a == $b);
  echo '<br>';
  var_dump($a > $b);
  echo '<br>';
  var_dump($a < $b);
  echo '<br>';
  var_dump($a >= $b);
  echo '<br>';
  var_dump($a <= $b);
  echo '<br>';
  var_dump($a != $b);
  echo '<br>';

  //Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
  var_dump($a< 7 && $b>3);
  echo '<br>';
  var_dump($a< 7 || $b>3);
  echo '<br>';
  var_dump(!($a< 7 && $b>3));
?>