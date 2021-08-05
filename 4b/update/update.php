
<?php

include"db_connect.php";
  
$name = mysqli_real_escape_string($conn, $_POST['nama']); 
$type_id = mysqli_real_escape_string($conn, $_POST['type_id_']);
$photo = mysqli_real_escape_string($conn, $_POST['photo']);


if(isset($_POST['submit'])){
$sql ="UPDATE heroes_tb set name='$name',id_type='$type_id',photo='$photo' where id_type='$type_id'";
  if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Data berhasil disimpan!')</script>";
    header('Location:../index.php');
  } else {
    echo "<script>alert('Data gagal disimpan!')</script>";
    header('Location:../index.php');
  }
} ?>
 
   

