<?php

// $hostname="localhost";
// $username="root";
// $password="";
// $db="final";
// $con=mysqli_connect($hostname,$username,$password,$db) or die("error connecting db");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>