<?php

$start = 10;
$end = 0;
$stop = 3;

for ($num = $start; $num >= $stop; $num--) {
    if($num%$start != 0)
    {
        echo $end . $num . "<br>";
    }
    else 
    {
        echo $num . "<br>"; 
    }
}
/* Needed Output
10
09
08
07
06
05
04
03
*/