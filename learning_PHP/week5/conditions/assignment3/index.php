<?php

$admins = ["Osama", "Ahmed", "Sayed"];

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    echo "The Request Method Is Post And Username Is " . $_POST["user"];
    if($_POST["user"] == $admins[0])
    {
        echo "This Username " . $_POST["user"] . " Is Admin";
    }
    elseif($_POST["user"] == $admins[1])
    {
        echo "This Username " . $_POST["user"] . " Is Admin";
    }
    elseif($_POST["user"] == $admins[2])
    {
        echo "This Username " . $_POST["user"] . " Is Admin";
    }
}
// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>