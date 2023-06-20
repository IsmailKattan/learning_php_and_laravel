<?php

$message = "Hello";

$Hello = fn($name) => $message . " " . $name;

echo $Hello("Osama"); // Hello Osama