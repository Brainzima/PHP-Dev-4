<?php 
include 'components/dbconnection.php';
$ref = $_GET['ref'];
$nref = $_GET['nref'];

$sql = "DELETE FROM images_tbl WHERE id=$ref";

    $result = mysqli_query($conn, $sql);
    if($result){
        unlink('uploads/'.$nref);
        header("Location: index.php?deleted=true");
    } else{
        echo " error";
    }