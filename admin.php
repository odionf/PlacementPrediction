<!DOCTYPE html>
<html lang="en">
<head>
  <title>Placement</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">ConCat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>     
    </ul>
        <?php
    session_start();
    ?>
    <div class = "navbar-text"> Signed in as <i><?php echo $_SESSION['$name'] ; ?></i></div>
  <form action="logout.php" method="post" style="float: right;">
      <button class="btn btn-secondary" style="margin-left: 10px;" type="submit" name="logout">Log Out</button>
  </form>
  </div> 
  
  </div>
</nav>

  
    <h1>Under Construction</h1>
<div class="container">
  <h2>CRUD operations</h2>
  <div class="card">
  <div class="card-header">
    Add User
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text"><?php
  include 'db.php';
  $query = "SELECT bid, AVG(avg_grade) AS val FROM student GROUP BY bid";
  $max=0;
  $b=0;

  $result = mysqli_query($mysqli,$query);   
  while($row = mysqli_fetch_assoc($result)){
    if($row['val']>$max)
    {
      $max=$row['val'];
      $b=$row['bid'];
    }
  }


  echo $b;
  ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>




</body>
</html>