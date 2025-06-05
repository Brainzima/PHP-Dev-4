<?php
// $names = array("John", "Jane", "Doe");
// // display all names
// foreach ($names as $name) {
//     echo $name . "<br>";
// }

$data = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// display all data
foreach ($data as $key => $value) {
    echo $key . ": " . $value . "<br>";
    
}
if($data['age'] >=18 ){
        echo "You are an adult.<br>";
    } else {
        echo "You are a minor.<br>";
    }
?>