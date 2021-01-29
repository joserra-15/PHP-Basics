<?php
//This file as its name properly indicates will be used for working with the different basic types of variables and data:
//Define a new variable and assign a value to each of the following types:
//boolean
$boolean = true;
var_dump($boolean);
echo '<br>';
//integer
$int = 1;
var_dump($int);
echo '<br>';
//float
$float = 1.1;
var_dump($float);
echo '<br>';
//string
$hello = 'hello';
var_dump($hello);
echo '<br>';
//array
$array = array('hola','hello');
var_dump($array);
echo '<br>';
//object
class ClassObject {
  public $num = 0;
}
$obj =new ClassObject;
var_dump($obj);
echo '<br>';
//NULL
$n = null;
var_dump($n);
?>