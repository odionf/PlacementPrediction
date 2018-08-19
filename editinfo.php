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
      <li class="nav-item  active">
        <a class="nav-link" href="#">Edit details</a>
      </li>
    </ul>
        <?php
    session_start();
    ?>
    <div class = "navbar-text"> Signed in as <i><?php echo $_SESSION['$name'] ; ?></i></div>
  <form action="logout.php" method="post" style="float: right;">
      <button class="btn btn-secondary" style="margin-left: 10px;" type="submit" name="logout">Log Out</button>
  </form>
  </div>  </div>
</nav>

 <?php
    include 'db.php';
 
    $pd = $_SESSION['$pid'];
    $qry = "SELECT * FROM `users` where pid='$pd'";
    $result = $mysqli->query($qry);
    $row = mysqli_fetch_assoc($result);
    $name=$row['name'];
    $bid='';
      $gyr='';
      $avg_marks = '';
      $ktno = '';
      $livekt = '';
      $extrac = '';
      $coc ='';
     
     

    $qry = "SELECT * FROM `student` where pid = '$pd'";
    $result = $mysqli->query($qry);
    if ($result) {
    
      $row = mysqli_fetch_assoc($result);
      $bid=$row['bid'];
      $gyr=$row['grad_yr'];
      $avg_marks = $row['avg_grade'];
      $ktno = $row['kt_number'];
      $livekt = $row['live_kt'];
      $extrac = $row['extra_curr'];
      $coc = $row['co_curr'];
     
     $q="SELECT distinct bname from `branch` where bid=$bid";
      $re=mysqli_query($mysqli,$q);
      $ro=mysqli_fetch_assoc($re);
      $search=$ro['bname'];
      
    
    }
  ?>


<div class="container" style="width: 100%; background-color: #e6edec; border-radius: 15px; margin-top: 15px; padding: 30px; align-items: center;">
  <form method="post" action="update_studentinfo.php?pd=<?php echo $pd; ?>">
    <h2>Edit Your Details</h2>
    <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
        </div>

        <div class="col-md-6 mb-3" style="align-content: center;">
          <label for="branch">Branch:</label><br>
          <select class="form-control" name="branch">
            <?php
            


            $qry="SELECT bname,bid from `branch`";
            $res=mysqli_query($mysqli,$qry);        
               
                while ($r=mysqli_fetch_assoc($res)) {
                if ($r['bname']==$search) {
                  echo "<option value='".$r['bid']."' selected>".$r['bname']."</option>";
                  }
                  else {
                echo "<option value='".$r['bid']."'>".$r['bname']."</option>";
                  }
               }
               ?>
             </select>
        </div>
      </div>


<div class="row">
        <div class="col-md-6 mb-3">
         <label for="gradyr">Graduation Year:</label><br>
          <input type="text" class="form-control" name="gradyr" value="<?php echo $gyr; ?>" required>
        </div>

        <div class="col-md-6 mb-3" style="align-content: center;">
          <label for="grade">Average Grade</label><br>
          <input type="text" class="form-control" name="grade" value="<?php echo $avg_marks; ?>" required>
        </div>
      </div>

<div class="row">
        <div class="col-md-6 mb-3">
         <label for="ktno">Number of dead KTs-</label><br>
          <input type="text" class="form-control" name="ktno" value="<?php echo $ktno; ?>" required>
        </div>

        <div class="col-md-6 mb-3" style="align-content: center;">
          <label for="livekt">Number of Live KTs-</label><br>
          <input type="text" class="form-control" name="livekt" value="<?php echo $livekt; ?>" required>
        </div>
      </div>



      <div class="row">
        <div class="col-md-6 mb-3">
         <label for="ktno">Extracurricular Participation</label><br>
          <select class="form-control"  name="extrac">
            <?php
            

            if($extrac==3)
            {
               echo "<option value='3' selected>Highly Active</option>";
            }
            else
            {
              echo "<option value='3'>Highly Active</option>";
            }

            if($extrac==2)
            {
               echo "<option value='2' selected>Moderately Active</option>";
            }
            else
            {
              echo "<option value='2'>Moderately Active</option>";
            }
            if($extrac==1)
            {
               echo "<option value='1' selected>Rarely Active</option>";
            }
            else
            {
              echo "<option value='1'>Rarely Active</option>";
            }
            if($extrac==0)
            {
               echo "<option value='0' selected>Not Active</option>";
            }
            else
            {
              echo "<option value='0'>Not Active</option>";
            }

            ?>
             </select>
        </div>

        <div class="col-md-6 mb-3" style="align-content: center;">
          
         <label for="coc">Co-acurricular Participation</label><br>
          <select class="form-control"  name="coc">
            <?php
            

            if($coc==3)
            {
               echo "<option value='3' selected>Highly Active</option>";
            }
            else
            {
              echo "<option value='3'>Highly Active</option>";
            }

            if($coc==2)
            {
               echo "<option value='2' selected>Moderately Active</option>";
            }
            else
            {
              echo "<option value='2'>Moderately Active</option>";
            }
            if($coc==1)
            {
               echo "<option value='1' selected>Rarely Active</option>";
            }
            else
            {
              echo "<option value='1'>Rarely Active</option>";
            }
            if($coc==0)
            {
               echo "<option value='0' selected>Not Active</option>";
            }
            else
            {
              echo "<option value='0'>Not Active</option>";
            }
            ?>
             </select>
        </div>
      </div>
      <div class="row" style=" width: 100%">
        <button class="btn-info" style="border-radius: 10px; float: right;" type="submit" name="submit"><big>UPDATE</big></button>
      </div>
    </form>
    <br>
    <form method="POST" action="prediction.php">
      <div class="row" style=" width: 100%">
        <button class="btn-info" style="border-radius: 10px; float: right;" type="submit" name="submit"><big>Check Placement</big></button>
      </div>
    </form>
</div>

</body>
</html>