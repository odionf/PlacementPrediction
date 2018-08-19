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
<?php
session_start();
?>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">ConCat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item ">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">View Statistics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editinfo.php">Edit details</a>
      </li>
    </ul>

    <div class = "navbar-text"> Signed in as <i><?php echo $_SESSION['$name'] ; ?></i></div>
  <form action="logout.php" method="post" style="float: right;">
      <button class="btn btn-secondary" style="margin-left: 10px;" type="submit" name="logout">Log Out</button>
  </form>
  </div> 
  </div>
</nav>


   <div style="width: 90%; margin-top: 1%; ">

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group" style="float: right; width: 100% display: inline-block;">
        <div style="float: left;">
          <label for="sel1" style="text-align: center; margin: 5px;">Select Department:</label>
          </div>
          <div style="float: left;"><select class="form-control" id="sel1" name="valueToSearch">
            <option value="">All</option>
            <?php 
           
            include 'db.php';
            if(isset($_POST['search'])){
              $search = $_POST['valueToSearch'];
            } else {
              $search = '';
            }
            $qry="SELECT distinct bname from `branch`";
            $res=mysqli_query($mysqli,$qry);
            
               
                while ($r=mysqli_fetch_assoc($res)) {
                if ($r['bname']==$search) {
                  echo "<option value='".$r['bname']."' selected>".$r['bname']."</option>";
                  }
                  else {
                echo "<option value='".$r['bname']."'>".$r['bname']."</option>";
                  }
               }
            
            ?>  
          </select></div>
          <div style="float: left;">&nbsp;<button type="submit" class="btn btn-primary" style="float: right;" name="search" >Find</button></div>       
        </div>
      </form>
    </div>




<div id="container" style="padding-bottom: 50px; margin-bottom: 50px; width: 90%">

   <div style="width:45%; height: auto; ">
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <p style="color:red; text-align: center;" class="lead">Data of 
      <b><?php
        $result = mysqli_query($mysqli,$query = "SELECT count(*) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' ")->fetch_assoc();
        echo implode(" ", $result);  
      ?></b>
      Students who sat for placements</p>
  </div>
<br>
<br>
</div>
<br>
<?php
    include 'db.php';
    $pid=$_SESSION['$pid'];     
      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1'";        
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      
      $plc=$row['count(pid)']; 
      $qu = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%'";      
      $re = mysqli_query($mysqli,$qu);
      $ro = mysqli_fetch_assoc($re);
      $total=$ro['count(pid)'];
      $nplc=$total-$plc;



      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND avg_grade<'6.0'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $less6=$row['count(pid)']; 

      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND avg_grade>='6.0' AND avg_grade<'7.0'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $btwn67=$row['count(pid)']; 

      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND avg_grade>='7.0' AND avg_grade<'8.5'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $btwn78=$row['count(pid)']; 

      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND avg_grade>='8.5'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $mre8=$row['count(pid)']; 



      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND kt_number='0'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $ktno0=$row['count(pid)']; 

      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND kt_number='1'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $ktno1=$row['count(pid)']; 

      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND kt_number='2'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $ktno2=$row['count(pid)']; 

      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND kt_number>'2'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $ktno3=$row['count(pid)']; 




      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND extra_curr='0'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $e0=$row['count(pid)'];
      
      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND extra_curr='1'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $e1=$row['count(pid)'];
      
      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND extra_curr='2'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $e2=$row['count(pid)'];
      
      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND extra_curr='3'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $e3=$row['count(pid)'];




      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND co_curr='0'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $c0=$row['count(pid)'];
      
      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND co_curr='1'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $c1=$row['count(pid)'];
      
      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND co_curr='2'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $c2=$row['count(pid)'];
      
      $query = "SELECT count(pid) FROM `alumni` INNER JOIN `branch` WHERE alumni.bid = branch.bid AND branch.bname LIKE '%$search%' AND placed='1' AND co_curr='3'";
      $result = mysqli_query($mysqli,$query);   
      $row = mysqli_fetch_assoc($result);
      $c3=$row['count(pid)'];






?>
<div  style="background-color: #dce0e8; width: 100% height:auto;" >
  <p style="color:green; text-align: center;"><h4 style=" text-align: center;">Data of Placed Students ( <?php echo $plc; ?> )</h4></p>

  <br>
  <div style="width:40%; height: auto; float:left;background-color: red; margin:10px;">
    <div id="avgmarks" style="width: 100%; height: 400px"></div>    
  </div>
  <div style="width:40%; height: auto; float:right; background-color: blue; margin:10px;">
    <div id="ktnum" style="width: 100%; height: 400px"></div>
  </div>
  <br>
  <div style="width:40%; height: auto; float:left;background-color: red; margin:10px;">
    <div id="extrac" style="width: 100%; height: 400px"></div>    
  </div>
  <div style="width:40%; height: auto; float:right; background-color: blue; margin:10px;">
    <div id="coc" style="width: 100%; height: 400px"></div>
  </div>
</div>



<div style="background-color: #dce0e8; float: left; width: 100%" >
  <p style=" text-align: center; background-color:#d2d7e0"><h4 style=" text-align: center;">Data of the companies they are placed in</h4> </p>
  <br>
  <div style="width:90%; height: auto; float:left;background-color: red; margin:10px;">
    <div id="companiesplcd" style="width: 100%; height: 400px"></div>    
  </div>



</div>

</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Status', 'Total number of students'],
          ['Placed',  <?php echo $plc; ?>],
          ['Not placed',   <?php echo $nplc; ?>],
          
        ]);

        var options = {
          title: 'Placement Status'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Participation Level', 'Total number of students'],
          ['Highly Active',  <?php echo $e3; ?>],
          ['Moderately Active',  <?php echo $e2; ?>],
          ['Rarely Active',   <?php echo $e1; ?>],
          ['Not Active',   <?php echo $e0; ?>],
          
        ]);

        var options = {
          title: 'Extracurricular Activity participation'
        };

        var chart = new google.visualization.PieChart(document.getElementById('extrac'));

        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChart3);

      function drawChart3(){

        var data = google.visualization.arrayToDataTable([
          ['Participation Level', 'Total number of students'],
          ['Highly Active',  <?php echo $c3; ?>],
          ['Moderately Active',  <?php echo $c2; ?>],
          ['Rarely Active',   <?php echo $c1; ?>],
          ['Not Active',   <?php echo $c0; ?>],
          
        ]);

        var options = {
          title: 'Co-curricular Activity participation'
        };

        var chart = new google.visualization.PieChart(document.getElementById('coc'));

        chart.draw(data, options);
      }

     




google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Range', 'Number of students',],
        ['Less than 6.0',  <?php echo $less6; ?>],
        ['6.0 to 7.0',  <?php echo $btwn67; ?>],
        ['7.0 to 8.5',  <?php echo $btwn78; ?>],
        ['8.5 to 10',  <?php echo $mre8; ?>]
      ]);

      var options = {
        title: 'Average Pointer',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Number of students',
          minValue: 0
        },
        vAxis: {
          title: 'Range'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('avgmarks'));

      chart.draw(data, options);
    }
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic1);

function drawBasic1() {

      var data = google.visualization.arrayToDataTable([
        ['Number of KTs', 'Number of Students',],
        
        ['More than 2', <?php echo $ktno3; ?>],
        ['2', <?php echo $ktno2; ?>],
        ['1', <?php echo $ktno1; ?>],
        ['none', <?php echo $ktno0; ?>]
      ]);

      var options = {
        title: 'Number of KTs',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Number of students',
          minValue: 0
        },
        vAxis: {
          title: 'Number of KTs'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('ktnum'));

      chart.draw(data, options);
    }



/*function drawBasic3() {

      var data = google.visualization.arrayToDataTable([
        ['Company name', 'Number of Students',],
        <? php
        $qu = "SELECT distinct cid,cname FROM `company`";
        $re = mysqli_query($mysqli,$qu);   
        while($ro = mysqli_fetch_assoc($re)){
        $cname=$ro['cname'];
        $query = "SELECT count(pid) FROM `placements` INNER JOIN `company` INNER JOIN `branch` INNER JOIN `alumni` WHERE placements.cid = company.cid AND alumni.bid=branch.bid AND branch.bname LIKE '%$search%' AND company.cname='$cname'";
        $result = mysqli_query($mysqli,$query);   
        $row = mysqli_fetch_assoc($result);
        $num=$row['count(pid)'];
        echo "['".$cname."',10],"; }


        ?>


        
      ]);

      var options = {
        title: 'Companies ',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Number of students',
          minValue: 0
        },
        vAxis: {
          title: 'Company name'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('companiesplcd'));

      chart.draw(data, options);
    }

*/
    </script>

<?php
echo "<script type='text/javascript'>";

echo "     google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBasic3);
function drawBasic3() {

      var data = google.visualization.arrayToDataTable([
        ['Company name', 'Number of Students',],
  ";
   $qu = "SELECT distinct cid,cname FROM `company`";
        $re = mysqli_query($mysqli,$qu);   
        while($ro = mysqli_fetch_assoc($re)){
        $cname=$ro['cname'];
        $cid=$ro['cid'];
        

        $q="select count(p.pid) from placements p left join company c on c.cid=p.cid left join alumni a on p.pid = a.pid left join branch b on a.bid = b.bid where c.cname='$cname' AND b.bname LIKE '%$search%'";
        $res=mysqli_query($mysqli,$q);
        $r=mysqli_fetch_assoc($res);
        $coun=$r['count(p.pid)'];       
echo "['$cname',$coun],";     
}    
echo"     
      ]);

      var options = {
        title: 'Company Name',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Number of students',
          minValue: 0
        },
        vAxis: {
          title: 'Company Name'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('companiesplcd'));

      chart.draw(data, options);
    }

";



echo "</script>";




?>
    






</html>