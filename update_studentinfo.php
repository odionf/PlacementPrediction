<?php
  include 'db.php';
  $pd = $_GET['pd'];
  session_start();
  if (isset($_POST['submit'])) {
    include 'db.php';
     $q="UPDATE users SET name = '".$_POST['name']."' WHERE pid = '$pd'";
      $s = mysqli_query($mysqli,$q);
      $qry = "UPDATE student SET bid = '".$_POST['branch']."', grad_yr = '".$_POST['gradyr']."', avg_grade = '".$_POST['grade']."', kt_number= '".$_POST['ktno']."', live_kt= '".$_POST['livekt']."', extra_curr= '".$_POST['extrac']."', co_curr= '".$_POST['coc']."' WHERE pid = '$pd'";
        $sql = mysqli_query($mysqli,$qry);
        if ($sql) {
        echo "<script> window.location.href = 'editinfo.php'</script> ";
      }
    else {
          echo "<script>alert('Error Updating Profile!'); window.location.href = 'editinfo.php'</script>";
        }
    
  
  }
?>