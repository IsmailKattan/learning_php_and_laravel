<?php 

$a = "10";
echo (int) $a;
echo "<br>";
echo gettype((int)$a);
//---------------1---------------
echo "<br>";
echo (int) $a+0;
echo "<br>";
echo gettype((int)$a+0);
//---------------2---------------
echo "<br>";
echo (int)$a++;
echo "<br>";
echo  gettype((int)$a);
//---------------3---------------
echo "<br>";
echo (int)--$a;
echo "<br>";
echo gettype((int)$a);
//---------------4---------------
echo "<br>";
settype($a, "int");
echo $a;
echo "<br>";
echo gettype($a);
//---------------5---------------


/*
// Needed Ouput
10
"integer"
10
"integer"
10
"integer"

// For The People Who Love Searching
10
"integer"
10
"integer"
*/