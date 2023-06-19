<?php 
// Code 1
$a = @$b or die("undefined variable on line " . __LINE__);
// Code 2
$f = @file("Not_A_File") or die("No such file on line " . __LINE__);

// Code 3
(@include("Not_A_File")) or die("No such file to include on line  " . __LINE__);