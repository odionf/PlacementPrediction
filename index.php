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
      <a class="navbar-brand" href="#">Login</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <?php
    include 'db.php';
      if (isset($_POST['submit'])) {
        $pid = mysqli_real_escape_string($mysqli,$_POST['pid']);
        $pswd=$_POST['password'];
        if($pid=='1' and $pswd=='123')
        {
          session_start();
          $_SESSION['$name'] = 'Administrator';
          header("location: admin.php");
        }
        else
        {



        $query = $mysqli->query("SELECT * FROM users WHERE pid = '$pid'LIMIT 1");
        $result = $query->fetch_assoc();
        
       
        if ($result['password']!=$pswd) {
          echo " <div class='navbar-text' style='margin: 0px 5px; color: red;''>Invalid Details!</div> ";
        } else {
          session_start();
          
          $query = $mysqli->query("SELECT pid, name FROM users WHERE pid = '$pid' LIMIT 1");
        $result = $query->fetch_assoc();
          $_SESSION['$pid'] = $result['pid'];
          $_SESSION['$name'] = $result['name'];
          header("Location: home.php");
            exit();
        }
      }
      }
    ?>


    <form style="margin-bottom: 0px;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="pid">username</label>
      <div class="input-group mb-2 mb-sm-0">
        <input type="text" class="form-control" id="pid" name="pid" placeholder="Username">
      </div>
    </div>
    <div class="col-auto">
      <label class="sr-only" for="password">Password</label>
      <input type="password" class="form-control mb-2 mb-sm-0" id="password" name="password" placeholder="Password">
    </div>
    <div class="col-auto">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>
</nav>
</body>
</html>