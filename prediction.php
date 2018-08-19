


<?php
include 'db.php';
session_start();
$pid = $_SESSION['$pid'];
$qry = "SELECT * FROM `student` where pid = '$pid'";
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
    }
if($avg_marks<6.0){
  $avg_marks = 4;
} elseif ($avg_marks>=6.0 && $avg_marks<7.0) {
  $avg_marks = 3;
} elseif ($avg_marks>=7.0 && $avg_marks<8.5) {
  $avg_marks = 2;
} elseif ($avg_marks>=8.5) {
  $avg_marks = 1;
}
$output = passthru("python test.py ".$bid." ".$avg_marks." ".$ktno." ".$livekt." ".$extrac." ".$coc);
?>

