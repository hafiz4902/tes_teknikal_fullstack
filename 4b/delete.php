<?php 
include "db_connect.php";

$id = $_GET['id'] ;
mysqli_query($conn,"DELETE from heroes_tb where id ='$id'");
header("location:index.php");
 
?>