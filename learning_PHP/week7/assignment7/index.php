<?php 
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$result = "";

foreach ($chars as $char) {
    if (is_string($char)) {
        $result .= $char;
    }
}

echo ucfirst(strtolower($result));

// Output
//"Elzero"
