<?php
//Generate a snippet that makes use of for
for ($i=0; $i < 10 ; $i++) {
  echo $i;
}
echo '<br>';
//Generate a snippet that makes use of foreach
$greeting = array('english'=> 'Hello', 'spanish' => 'Hola');
foreach ($greeting as $language => $value) {
  echo "In $language you say $value";
}
echo '<br>';
//Generate a snippet that uses while
$a=0;
while ($a <= 10) {
  echo $a++;
}
echo '<br>';
//Generate a snippet that uses do while
$b=0;
do {
  $b++;
  echo $b;
} while ($b <= 10);
?>
