<?php 

$str = "<div><b>Elzero</b></div>";

$str = strip_tags($str,"<b>");
echo $str;

// <b>Elzero</b>