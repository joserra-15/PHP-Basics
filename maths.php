<?php
//Define a variable whose value is the result of the function that returns an absolute value.
$abs = -6;
echo abs($abs);
echo '<br>';

//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
$round = 2.3;
echo round($round);
echo '<br>';

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
$arr=array(2, 3, 1, 6, 7);
echo max($arr);
echo '<br>';

//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
echo min($arr);
echo '<br>';

//Define a variable whose value is the result of the function that returns a random number
echo rand();
?>