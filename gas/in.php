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

if($_GET['id']){
$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * FROM chart ");
$data = array();
while($info=mysqli_fetch_array($query))
 {
    if($id <$info['id'])
        $data[]=$info;
 }
 echo json_encode($data);

}
?>