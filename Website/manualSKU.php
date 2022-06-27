<?php
//$serverName = "ssdevd365salesautomation.database.windows.net";
//$connectionInfo = array("Database" => "POC.Product");
//$conn = sqlsrv_connect($serverName, $connectionInfo);


if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}

/* User login ??????? */
$var_SKU = $_POST['skuid'];
$var_SKU = $_POST['prod_desc'];
$var_SKU = $_POST['department'];
$var_SKU = $_POST['vendorSKU'];
$var_SKU = $_POST['vendor'];
$var_SKU = $_POST['brand'];
$var_SKU = $_POST['style'];
$var_SKU = $_POST['logoApp'];
$var_SKU = $_POST['logoPlace'];
$var_SKU = $_POST['material1'];
$var_SKU = $_POST['material1%'];
$var_SKU = $_POST['material2'];
$var_SKU = $_POST['material2%'];
$var_SKU = $_POST['material3'];
$var_SKU = $_POST['material3%'];
$var_SKU = $_POST['taxGroup'];
$var_SKU = $_POST['PZ1'];
$var_SKU = $_POST['PZ2'];
$var_SKU = $_POST['PZ3'];
$var_SKU = $_POST['PZ4'];
$var_SKU = $_POST['PZ5'];
$var_SKU = $_POST['PZ6'];
$var_SKU = $_POST['PZ40'];
$var_SKU = $_POST['PZ41'];
$var_SKU = $_POST['PZ42'];
$var_SKU = $_POST['PZ43'];
$var_SKU = $_POST['PZ44'];

/*$resultFindSKU =($conn, $tsql2); */

if (sqlsrv_query($conn, $tsql2)) {  
    echo "Statement executed.\n";  
} else {  
    echo "Error in statement execution.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  


mysqli_close($conn);
?>

