<?php 
$data = array(
    array("name" => "John", "age" => 30, "city" => "New York"),
    array("name" => "Jane", "age" => 25, "city" => "Los Angeles"), 
    array("name" => "Doe", "age" => 22, "city" => "Chicago"),
    array("name" => "Alice", "age" => 28, "city" => "Miami"),
    array("name" => "Bob", "age" => 35, "city" => "Seattle"),
    array("name" => "Charlie", "age" => 20, "city" => "Boston"),
    array("name" => "Eve", "age" => 27, "city" => "San Francisco"),
    array("name" => "Frank", "age" => 32, "city" => "Austin"),
    array("name" => "Grace", "age" => 29, "city" => "Denver"),
    array("name" => "Hank", "age" => 24, "city" => "Phoenix")
);

// display all data
foreach ($data as $person) {
    echo "Name: " . $person['name'] . "<br>";
    echo "Age: " . $person['age'] . "<br>";
    echo "City: " . $person['city'] . "<br><hr>";
}
?>