<?php
//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”
$whether = 'met';
if ($whether == 'met') {
  echo 'We are on Monday';
}

//Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
if ($whether == 'met') {
  echo 'We are in October';
}else{
  echo date('M');
}

//Create a double condition that evaluates:
//If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
if (date('i') < 10) {
  echo 'the current minute is less than 10';
}else if(date('i') > 15){
  echo 'the current minute is more than 15';
}else{
  echo 'does not meet any conditions';
}

//Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
switch (date('N')) {
  case 1:
    echo 'Monday';
    break;
  case 2:
    echo 'Tuesday';
    break;
  case 3:
    echo 'Wednesday';
    break;
  case 4:
    echo 'Thursday';
    break;
  case 5:
    echo 'Friday';
    break;
  case 6:
    echo 'Saturday';
    break;
  case 7:
    echo 'Sunday';
    break;
  default:
    echo 'New day?';
    break;
}

?>