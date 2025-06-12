<?php 
include '01_dbconnection.php';

$sql = "DROP TABLE users_tbl";

$query = mysqli_query($conn,$sql);
if($query){
    echo "<br>Table deleted sucessfully!";
}else{
    echo "Query Failed";
}

?>