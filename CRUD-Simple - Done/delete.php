<?php 
include 'components/dbconnection.php';
$ref = $_GET['ref'];

$sql = "DELETE FROM users_tbl WHERE user_id=$ref";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: index.php");
    } else{
        echo " error";
    }