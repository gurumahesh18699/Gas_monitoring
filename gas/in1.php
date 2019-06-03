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


	$query=mysqli_query($conn,"SELECT * FROM chart ORDER BY id DESC LIMIT 1 ");
$data = array();
while($info=mysqli_fetch_array($query))
 {
   
        $data[]=$info;
 }
 echo json_encode($data);


?>