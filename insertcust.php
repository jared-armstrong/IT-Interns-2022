<?php
//Step 2.1 - Remove this comment when done
$con=mysqli_connect("db.luddy.indiana.edu","i308f20_hhenke","my+sql=i308f20_hhenke", "i308f20_hhenke");
// Check connection
if (!$con)
	{die("Failed to connect to MySQL: " . mysqli_connect_error() ); }
else 
	{ echo "Established Database Connection" ;}
	
//Step 2.2 - Uncomment the following when instructed by removing the /* and the */ below.

$var_cname = $_POST['form-cname'];
$var_cadress = $_POST['form-caddress'];
$var_cphone = $_POST['form-cphone'];
$sql = "INSERT INTO customer (name, address, phone) VALUES ('$var_cname', '$var_caddress', '$var_cphone') ";

if (mysqli_query($con, $sql)) {
	echo "1 record added";
	}
else
	{
		die('SQL Error: ' . mysqli_error($con)); 
		}
mysqli_close($con);
?>