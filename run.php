<?php
$branch = $_POST['branch'];
$result = $_POST['result'];
$kt_dead = $_POST['kt_dead'];
$extra = $_POST['extra'];
$co = $_POST['co'];
echo 'Yes';
$output = passthru("python test1.py ".$branch." ".$result." ".$kt_dead." ".$extra." ".$co);
echo 'yes';
echo $output;
?>