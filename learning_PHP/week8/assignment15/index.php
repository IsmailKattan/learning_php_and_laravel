<?php 

$chars = ["o", "r", "e", "z", "l", "E"];
$nchars = [];
$zero = 0;
$counter = 0;

foreach ($chars as $key => $value) {
    $counter++;
}

$counter--; // for indexing
foreach ($chars as $key => $value) {
$nchars[$counter-$zero] = $value;
$zero++;
}
$result = "";
$zero = 0;  // for reusing
$counter++; // for counting 
for ($i=0; $i < $counter; $i++) { 
    $result .= $nchars[$i];
}

echo $result;


// Output
// "Elzero"
