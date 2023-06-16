<?php

$str = <<<'output'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
output;

echo nl2br($str);


// Needed Output

/*
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/