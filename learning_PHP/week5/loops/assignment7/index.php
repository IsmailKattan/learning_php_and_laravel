<?php 

$mix = [1, 2, "A", "B", "C", 3, 4];
$num_counter = 0;
$letter_counter = 0;
foreach ($mix as $value) {
    if(is_numeric($value))
    {
        echo $value . "<br>";
        $num_counter++;
    }
    else
    {
        $letter_counter++;
    }
}

echo "\"$num_counter Numbers Printed<br>$letter_counter Letters Ignored\"";