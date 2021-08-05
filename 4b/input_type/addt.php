
<?php
  include"db_connect.php";
  
    $name = mysqli_real_escape_string($conn, $_POST['nama']); 

    if(isset($_POST['submit'])){
    $sql ="INSERT INTO type_tb (nama_type) VALUES ('$name')";
    
      if(mysqli_query($conn, $sql)){  
        echo "<script>alert('Data berhasil disimpan!')</script>";
        header('Location:../index.php');
      } else {
        echo "<script>alert('Data gagal disimpan!')</script>";
        header('Location:../index.php');
      }
    }
?>

