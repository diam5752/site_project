<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "site_gen_project";
$mysql_conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
mysqli_select_db($mysql_conn,$dbname) or die('database selection problem');
?>
