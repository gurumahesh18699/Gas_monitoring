<?php
$servername ="localhost";
 $user="root";
 $pass="";
 $dbname="chart";
 $conn=mysqli_connect($servername,$user,$pass,$dbname);
 if (!$conn) {
 	die("connection failed".mysqli_connect_error());
 	# code...
 }

if($_GET['data']){
    $data=$_GET['data'];
    $query=mysqli_query($conn,"INSERT INTO chart (x) VALUES ('$data')");
  echo "delivered";
}

?>