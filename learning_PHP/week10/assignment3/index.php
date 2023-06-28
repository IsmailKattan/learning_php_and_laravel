<?php 

$baseDir = "Programming";
$subDir = "PHP";

if (!file_exists($baseDir)) {
    mkdir($baseDir , 0700); 
}

$fullDirPath = $baseDir . '/' . $subDir;
if (!file_exists($fullDirPath)) {
    mkdir($fullDirPath);
    chmod($fullDirPath, 0755); 
}

if (file_exists($fullDirPath)) {
    rmdir($fullDirPath);
    echo "Directory Programming/PHP Removed <br>";
}

if (file_exists($baseDir)) {
    rmdir($baseDir);
    echo "Directory Programming Removed <br>";
}

