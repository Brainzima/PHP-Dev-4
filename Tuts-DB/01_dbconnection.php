<?php
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "php_con_db";

// $conn = mysqli_connect($host, $user, $password, $dbname);
// $conn = new mysqli($host, $user, $password, $dbname);
$conn = mysqli_connect('localhost','root','','php_con_db');

if($conn){
    echo "Connection successful";
}else{
    echo "Connection failed ";
}

?>