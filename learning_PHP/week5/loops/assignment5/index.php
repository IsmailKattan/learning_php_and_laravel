<?php 

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = 1; $i < count($mix); $i++) {
  if (is_numeric($mix[$i])) {
    echo $mix[$i] . "<br>";
  }
}
