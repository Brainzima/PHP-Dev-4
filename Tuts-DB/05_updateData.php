<?php 
include '01_dbconnection.php';

$sql = "UPDATE users_tbl SET address='Kharsouta, Katihar - 855113' WHERE id = 1";

$query = mysqli_query($conn,$sql);
if($query){
    echo "<br>Data Updated sucessfully!";
}else{
    echo "Query Failed";
}

?>