<?php 
$name = "Preetam";
echo $name;
echo "<br>Welcome to <b>PHP</b> programming, $name!";
echo "<br>Welcome to <b>PHP</b> programming, {$name}!";

$age = 25;
echo "<br>My name is $name and I am $age years old.";


$name = "Vishal";
$age = 30;
echo "<br>My name is $name and I am $age years old.";

const institute = "Brainzima";
echo "<br>My name is $name and I am $age years old. I am learning PHP at ".institute;

define("AUTHOR","M Rahman");
echo "<br>My name is $name and I am $age years old. I am learning PHP at ".AUTHOR;



?>