<?php 

//---------------1---------------
$fileContent = file_get_contents('elzero.txt');
$lines = explode(PHP_EOL, $fileContent);
$firstTwoLines = array_slice($lines, 0, 2);
$result = implode(" ", $firstTwoLines);
echo $result . "<br>";
//---------------2---------------
$lines = file('elzero.txt', FILE_IGNORE_NEW_LINES);
$firstTwoLines = array_slice($lines, 0, 2);
$result = implode(" ", $firstTwoLines);
echo $result . "<br>";

//---------------3---------------
$file = fopen('elzero.txt', 'r');
$firstLine = fgets($file);
$secondLine = fgets($file);
fclose($file);
$result = $firstLine . $secondLine;
echo trim($result) . "<br>";

//---------------4---------------
$file = fopen('elzero.txt', 'r');
$result = '';

for ($i = 0; $i < 2; $i++) {
    $line = fgets($file);
    $result .= trim($line) . ' ';
}

fclose($file);

$result = trim($result);
echo $result . "<br>";




