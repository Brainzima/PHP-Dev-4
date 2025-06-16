<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crud_simple';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    echo "Db Connection Failed";    
}