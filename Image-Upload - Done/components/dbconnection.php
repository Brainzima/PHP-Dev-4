<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'image_upload';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    echo "Db Connection Failed";    
}