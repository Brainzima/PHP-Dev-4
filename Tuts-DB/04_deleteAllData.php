<?php 
include '01_dbconnection.php';

$sql = "DELETE FROM users_tbl";

$query = mysqli_query($conn,$sql);
if($query){
    echo "<br>Data Deleted sucessfully!";
}else{
    echo "Query Failed";
}

?>