<?php
//Step 2.1 - Remove this comment when done
$con=mysqli_connect("--------------");
// Check connection
if (!$con)
	{die("Failed to connect to MySQL: " . mysqli_connect_error() ); }
else 
	{ echo "Established Database Connection" ;}
	
//Step 2.2 - Uncomment the following when instructed by removing the /* and the */ below.

$var_??? = $_POST['----'];
$var_??? = $_POST['----'];
$var_??? = $_POST['----'];
$sql = "INSERT INTO Product (name, address, phone) VALUES ('$var_???', '$$var_???', '$$var_???') ";









if (mysqli_query($con, $sql)) {
	echo "1 record added";
	}
else
	{
		die('SQL Error: ' . mysqli_error($con)); 
		}
mysqli_close($con);
?>