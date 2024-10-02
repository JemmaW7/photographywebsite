<?php
//1.  Create a database connection
$dbhost ="localhost";
$dbuser ="u986890855_jwadmin";
$dbpassword="t9Qzy1XV2;";
$dbname = "u986890855_jwphoto";

$connection= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$conn= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//Test if connection occured

if(mysqli_connect_errno()){
	die("DB connection failed: " .
		mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);
}


if (!$connection)
  {
  die('Could not connect: ' . mysqli_error());
  }


?>