<?php 
include_once("db_connect.php");

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

body {
    background-color: #EEEFF3;
    font-family: 'Poppins', sans-serif
}

.card {
    width: 375px;
    border: none;
    border-radius: 10px
}

.media {
    border: 1px solid #EBEDEC
}

.fa-angle-down {
    margin-top: 13px
}

p.text-muted {
    font-size: 14px
}

.list {
    list-style: none;
    line-height: 50px;
    font-size: 14px
}

ul.list li:hover {
    border: none;
    background-color: #ECF2FE;
    color: #224bba;
    cursor: pointer
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 
include_once("db_connect.php");
$id = $_GET['id'];
?>
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

<?php
			$sql = "SELECT*FROM heroes_tb inner join type_tb on heroes_tb.id_type = type_tb.id_type where id = '<?php echo $id ;?>'; ";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
		?> 
        
        <div class="container d-flex justify-content-center">
            <div class="card mt-5 px-4 pt-4 pb-2">
                 <img src="<?php echo $record['photo']; ?>" class="mr-1 align-self-start">
                     <div class="media-body">
                       <div class="d-flex flex-row justify-content-between">
                         <h6 class="mt-2 mb-0"><<?php echo $record['name']; ?></h6><i class="fas fa-angle-down mr-3 text-muted"></i>
                      </div>
                        <p class="text-muted">Los Angeles</p>
                   </div>
                <p><param name="dfs" value="20000"></p>

                
        </div><?php }?> 
    </body>
</html>






        
