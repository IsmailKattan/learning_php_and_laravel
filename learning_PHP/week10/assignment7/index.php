<?php 

$file = 'elzero.txt';

$content = file_get_contents($file);

$newContent = str_replace('Osamaa', 'Elzero', $content);

file_put_contents($file, $newContent);
