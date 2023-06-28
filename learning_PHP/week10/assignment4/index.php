<?php 

function change_permissions($filename) {
    if (is_dir($filename)) {
        return "$filename Is Directory And Only Files Allowed <br>";
    }

    $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
    if ($fileExtension !== 'txt') {
        return "$filename Extension Is Not Txt <br>";
    }

    if (chmod($filename, 0600)) {
        return "Permissions of $filename Changed <br>";
    }
}

echo change_permissions("Elzero"); 
echo change_permissions("Work.docx"); 
echo change_permissions("Result.txt");