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
    	<li class="nav-item">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="placementstats.php">View Statistics</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="editinfo.php">Edit details</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="#">The prediction:</a>
      </li>
    </ul>
        <?php
    session_start();
    ?>
    <div class = "navbar-text"> Signed in</div>
  <form action="logout.php" method="post" style="float: right;">
      <button class="btn btn-secondary" style="margin-left: 10px;" type="submit" name="logout">Log Out</button>
  </form>
  </div>  </div>
</nav>


<div style="margin: 20px; padding: 20px;">
  
  <h3>Comparatively you have a lower chance of being placed<br>
  Check your colleagues details and improve in the relevant areas</h3>

  <form action="editinfo.php" style="margin: 5px; padding: 10px;">
      <div class="row" style=" width: 100%">
        <button class="btn-danger" style="border-radius: 10px; float: right;" type="submit" name="submit"><big>Go back</big></button>
      </div>
    </form>

    <form action="home.php" style="margin: 5px; padding: 10px;">
      <div class="row" style=" width: 100%">
        <button class="btn-info" style="border-radius: 10px; float: right;" type="submit" name="submit"><big>Check out the comparison with your batchmates</big></button>
      </div>
    </form>
    <form action="placementstats.php" style="margin: 5px; padding: 10px;">
      <div class="row" style=" width: 100%">
        <button class="btn-info" style="border-radius: 10px; float: right;" type="submit" name="submit"><big>Check out the details of the placed students</big></button>
      </div>
    </form>
</div>






</body>
</html>