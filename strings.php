<?php
//Print a text string
echo 'Hello';
echo '<br>';
//Print a text string that interpret variables
$name = 'jose';
echo "Hello $name";
echo '<br>';
//Concatenate a previously declared variable in a text string
echo 'hello '.$name;
echo '<br>';

//Execute the function that allows you to replace text in a string (case sensitive)
$my_str = 'If the Facts do not fit the theory, change the facts.';
echo str_replace("Facts", "truth", $my_str);
echo '<br>';

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
echo str_ireplace("facts", "truth", $my_str);
echo '<br>';

//Execute the function that allows you to write a text N times
echo str_repeat('hello ', 5);
echo '<br>';

//Execute the function that allows to obtain the length of a text string
echo strlen('hello ');
echo '<br>';

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
echo strpos('hello', 'l');
echo '<br>';

//Execute the function that allows a text string to be capitalized
echo strtoupper($my_str);
echo '<br>';

//Execute the function that allows you to transform a text string to lowercase
echo strtolower($my_str);
echo '<br>';

//Execute the function that allows to obtain a text substring from the position
echo substr($my_str, 5, 4);
?>