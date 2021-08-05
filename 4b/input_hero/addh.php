
<?php
  include"db_connect.php";
  
    $name = mysqli_real_escape_string($conn, $_POST['nama']); 
    $type_id = mysqli_real_escape_string($conn, $_POST['type_id']);
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);
    
    
    if(isset($_POST['submit'])){
    $sql ="INSERT INTO heroes_tb (name,id_type,photo) VALUES ('$name','$type_id','$photo')";
    
      if(mysqli_query($conn, $sql)){ 
        echo "<script>alert('Data berhasil disimpan!')</script>";
        header('Location:../index.php');
      } else {
        echo "<script>alert('Data gagal disimpan!')</script>";
        header('Location:../index.php');
      }
    } ?>


