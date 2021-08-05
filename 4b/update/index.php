<!DOCTYPE html>
<html lang="en">

<head>
    <base href="url">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Hero</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php 
include_once("db_connect.php");
$id = $_GET['id'];
?>
    <FORM ACTION="update.php" METHOD="POST" > 
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Add Hero </h2>
                </div>
                <div class="card-body">
                <form method="POST">
                <?php
			$sql = "SELECT*FROM heroes_tb inner join type_tb on heroes_tb.id_type = type_tb.id_type where id = '<?php echo $id ;?>'; ";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
		?> 
                         <div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Id Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="type_id" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Link Avatar</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="photo" >
                                </div>
                            </div>
                        </div>
             <?php}?>      
                        <center><div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit">Send</button>
                        </div></center>
                </fornm>
                </div>
            </div>
        </div>
    </div>
    </form>
   
    
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <?php

if(isset($_POST['submit'])){
include"db_connect.php";
  
$name = mysqli_real_escape_string($conn, $_POST['nama']); 
$type_id = mysqli_real_escape_string($conn, $_POST['type_id_']);
$photo = mysqli_real_escape_string($conn, $_POST['photo']);


$id = $_GET['id'];
$sql ="UPDATE heroes_tb as h inner join table_tb as t on   set name='$name',id_type='$type_id',photo='$photo' where id ='$id'";
  if(mysqli_query($conn, $sql)){ 
    echo "<script>alert('Data berhasil disimpan!')</script>";
    header('Location:../index.php');
  } else {
    echo "<script>alert('Data gagal disimpan!')</script>";
    header('Location:../index.php');
  }
} ?>

</body>

</html>


 
   

