<?php
include '01_dbconnection.php';

$sql = "INSERT INTO users_tbl(id, name, address) VALUES
(1,'Preetam','Kharsouta'),
(2,'Amit','Patna'),
(3,'Priya','Delhi'),
(4,'Rohan','Mumbai'),
(5,'Sneha','Bangalore'),
(6,'Vikram','Chennai'),
(7,'Deepa','Hyderabad'),
(8,'Rahul','Kolkata'),
(9,'Pooja','Ahmedabad'),
(10,'Kunal','Pune'),
(11,'Nisha','Jaipur'),
(12,'Arjun','Lucknow'),
(13,'Meera','Bhopal'),
(14,'Suresh','Indore'),
(15,'Geeta','Chandigarh'),
(16,'Rajesh','Surat'),
(17,'Lakshmi','Nagpur'),
(18,'Anil','Coimbatore'),
(19,'Divya','Visakhapatnam'),
(20,'Kartik','Kochi')";

$query = mysqli_query($conn, $sql);
if ($query) {
    echo "<br>Multiple Data Added sucessfully!";
} else {
    echo "Query Failed";
}
