<?php 
include '01_dbconnection.php';

$sql = "INSERT INTO users_tbl(id, name, address) VALUES(1,'Preetam','Kharsouta')";

$query = mysqli_query($conn,$sql);
if($query){
    echo "<br>Data Added sucessfully!";
}else{
    echo "Query Failed";
}

?>