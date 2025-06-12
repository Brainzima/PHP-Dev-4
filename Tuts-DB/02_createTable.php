<?php 
include '01_dbconnection.php';

$sql = "CREATE TABLE users_tbl(
        id int,
        name varchar(255),
        address varchar(255)
        )";

$query = mysqli_query($conn,$sql);
if($query){
    echo "Table has been created sucessfully!";
}else{
    echo "Query Failed";
}

?>