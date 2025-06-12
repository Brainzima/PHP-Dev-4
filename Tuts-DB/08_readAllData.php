<?php 
include '01_dbconnection.php';

$sql = "SELECT * FROM users_tbl";

$query = mysqli_query($conn,$sql);

$result = mysqli_fetch_all($query);
// $result = mysqli_fetch_array($query);

echo "<pre>";
echo print_r($result);
echo "</pre>";

// $result = mysqli_fetch_assoc($query);

?>