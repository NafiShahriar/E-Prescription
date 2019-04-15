<?php
session_start();
require_once('constant.php');

$host = HOST;
$user = USER;
$pass = PASS;
$db_name = DBNAME;

$con = mysqli_connect($host,$user,$pass,$db_name);


?>