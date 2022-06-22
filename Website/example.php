<?php
$host ="xxx.xxx.xxx.xxx"; 
$username ="username";
$password ="password";
$database ="database";

mssql_connect($host, $username, $password);
mssql_select_db($database);



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
