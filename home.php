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
      <li class="nav-item">
        <a class="nav-link" href="placementstats.php">View Statistics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editinfo.php">Edit details</a>
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

    
<div class="container" style="margin-top: 10px;">
  
  <div class="card">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h5 class="card-title">The best Department is :
<?php
  include 'db.php';
  $pid=$_SESSION['$pid'];
  $query = "SELECT * FROM student WHERE pid='$pid'";


  $result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$gradyr=$row['grad_yr'];
  $query = "SELECT bid, AVG(avg_grade) AS val FROM student GROUP BY bid order by val desc limit 1";


  $result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
 
      $max=$row['val'];
      $b=$row['bid'];

  $qu = "SELECT bname FROM branch Where bid=$b";
  $re = mysqli_query($mysqli,$qu);   
  $ro = mysqli_fetch_assoc($re);
  
  echo $ro['bname'];
  echo" (With an average grade of ".$max.")";

  ?>
</h5>

    
    <p class="card-text">Your department (
    	<?php
  
  $query = "SELECT bid,AVG(avg_grade) AS val FROM student  where bid=(SELECT DISTINCT branch.bid from branch inner join student where student.bid=branch.bid and student.pid='$pid') GROUP BY bid";
  
  
  $max=0;
  $bid=1;

  $result = mysqli_query($mysqli,$query);   
  $row = mysqli_fetch_assoc($result);
  $b=$row['bid'];
  $max=$row['val'];

  
  $qu = "SELECT bname FROM branch Where bid='$b'";
  $re = mysqli_query($mysqli,$qu);   
  $ro = mysqli_fetch_assoc($re);
  $bname=$ro['bname'];
  echo $ro['bname'];
  echo ") has an average grade of ";
  echo $max ;

  ?>


    </p>
    
  </div>
</div>
</div>

<?php
$query = "SELECT avg_grade FROM `student` WHERE pid='$pid' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$yrgr=$row['avg_grade']; 

$query = "SELECT avg(avg_grade) FROM `student` inner join `branch` WHERE bname='$bname' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$avgr=$row['avg(avg_grade)'];

$query = "SELECT kt_number FROM `student` WHERE pid='$pid' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$ktno=$row['kt_number']; 

$query = "SELECT avg(kt_number) as val FROM `student` inner join `branch` WHERE bname='$bname' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$avkt=$row['val'];

$query = "SELECT extra_curr FROM `student` WHERE pid='$pid' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$yec=$row['extra_curr']; 

$query = "SELECT avg(extra_curr) as val FROM `student` inner join `branch` WHERE bname='$bname' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$avec=$row['val'];

$query = "SELECT co_curr FROM `student` WHERE pid='$pid' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$ycc=$row['co_curr']; 

$query = "SELECT avg(co_curr) as val FROM `student` inner join `branch` WHERE bname='$bname' and grad_yr='$gradyr'";
$result = mysqli_query($mysqli,$query);   
$row = mysqli_fetch_assoc($result);
$avcc=$row['val'];



?>

<div class="container" style="margin-top: 10px;">
  
  <div class="card">
  <div class="card-header">
    <h4>Comparison betweeen your and your classmates performance
  
  </h4></div>
  <div class="card-body">
    <div style="width:40%; height: auto; float:left;background-color: red; margin:10px;">
      <div id="avgmarks" style="width: 100%; height: 400px"></div>    
    </div>
    <div style="width:40%; height: auto; float:right; background-color: blue; margin:10px;">
      <div id="ktnum" style="width: 100%; height: 400px"></div>
    </div>
    <div style="width:40%; height: auto; float:left;background-color: red; margin:10px;">
      <div id="extrac" style="width: 100%; height: 400px"></div>    
    </div>
    <div style="width:40%; height: auto; float:right; background-color: blue; margin:10px;">
      <div id="coc" style="width: 100%; height: 400px"></div>
    </div>





  </div>
</div>
</div>




</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Range', 'Average Grade',],
        ['You',  <?php echo $yrgr; ?>],
        ['your batchmates',  <?php echo $avgr; ?>],
        
      ]);

      var options = {
        title: 'Average Pointer',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Grade',
          minValue: 0
        },
        vAxis: {
          title: 'Comparison'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('avgmarks'));

      chart.draw(data, options);
    }


    google.charts.setOnLoadCallback(drawBasic1);

function drawBasic1() {

      var data = google.visualization.arrayToDataTable([
        ['Comparison', 'Number of KTs',],
        ['You',  <?php echo $ktno; ?>],
        ['your batchmates',  <?php echo $avkt; ?>],
        
      ]);

      var options = {
        title: 'Number of KTs',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Grade',
          minValue: 0
        },
        vAxis: {
          title: 'Comparison'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('ktnum'));

      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawBasic2);

function drawBasic2() {

      var data = google.visualization.arrayToDataTable([
        ['Comparison', 'Level',],
        ['You',  <?php echo $yec; ?>],
        ['your batchmates',  <?php echo $avec; ?>],
        
      ]);

      var options = {
        title: 'Extra Curricular Activities',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Participation Level',
          minValue: 0
        },
        vAxis: {
          title: 'Comparison'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('extrac'));

      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawBasic3);

function drawBasic3() {

      var data = google.visualization.arrayToDataTable([
        ['Comparison', 'Level',],
        ['You',  <?php echo $ycc; ?>],
        ['your batchmates',  <?php echo $avcc; ?>],
        
      ]);

      var options = {
        title: 'Co curricular Activities',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Participation Level',
          minValue: 0
        },
        vAxis: {
          title: 'Comparison'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('coc'));

      chart.draw(data, options);
    }
</script>


</html>