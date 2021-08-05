<?php 
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>7 Deadly Shin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-size:35px;"><span style="color:orange; ">7</span>DW</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div  id="navbarNav " style="float:right;">
      <ul class="navbar-nav me-2">
        <li class="nav-item me-2">
          <a href="input_hero/index.php">
        <button type="button" class="btn btn-warning mr-3">Add Hero</button>
          </a>
        </li>
        <li class="nav-item">
          <a href="input_type/index.php">
            <button type="button" class="btn btn-warning">Add Type</button>
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


<div class="container mt-3">	
	
    <div class="row">
		<?php
			$sql = "SELECT*FROM heroes_tb inner join type_tb on heroes_tb.id_type = type_tb.id_type ";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
		?>         
        <div class="card bg-secondary mt-3 me-3" style="width: 16rem; ">
            <center>
                <img alt="avatar" class="img-fluid pt-2" src="<?php echo $record['photo']; ?>">
                <div class="card-body">
                <h5 class="card-title"><?php echo $record['name']; ?></h5>
                <div class="pb-2 text-blue-500"><?php echo $record['nama_type']; ?></div>
                <a href="detail.php?id=<?php echo $record['id'];?>" class="btn btn-success">Detail</a>
                <div class="pt-1">
                  <a href="delete.php?id=<?php echo $record['id'];?>" class="btn btn-danger ">Delete</a>
                  <a href="update/index.php?id=<?php echo $record['id'];?>,nama=<?php echo $record['name']; ?>" class="btn btn-primary">Update</a>
                </div>
                </div>
            </center>
        </div>
        

        <?php } ?>       
    </div>

</div>
</body>

	
    