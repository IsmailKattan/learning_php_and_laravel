<?php 
$a = 30;
$b = 20;
$c = 10;

$d = $a + $b === $c ? "A + B = C" : ($a + $c === $b ? "A + C = B" : ($b + $c === $a ? "B + C = A" : "The End"));
echo $d;
/*
echo "<br>";
if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}
*/
// Output
//"B + C = A"