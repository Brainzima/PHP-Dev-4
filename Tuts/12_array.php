<?php 

// indexed array
// $myArray = array("apple", "banana", "cherry");
// echo $myArray[1];

// echo '<pre>';
// echo var_dump($myArray);
// echo '</pre>';

// echo '<br>';

// echo '<pre>';
// print_r($myArray);
// echo '</pre>';

// $myArray2 = ['apple', 'banana', 'cherry'];
// echo $myArray2[1];


// associative array
$myArray3 = array("name" => "John", "age" => 30, "city" => "New York");
echo '<pre>';
echo var_dump($myArray3);
echo '</pre>';

echo $myArray3['city'];

$myArray4 = ['name' => 'John', 'age' => 30, 'city' => 'New York'];

echo '<pre>';
echo var_dump($myArray4);
echo '</pre>';

echo $myArray4['city'];

?>