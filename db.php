<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'password';
$db = 'sem6project';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>