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
$var_skuid = $_POST['skuid'];
$var_prod_desc = $_POST['prod_desc'];
$var_department = $_POST['department'];
$var_vendorSKU = $_POST['vendorSKU'];
$var_vendor = $_POST['vendor'];
$var_brand = $_POST['brand'];
$var_style = $_POST['style'];
$var_logoApp = $_POST['logoApp'];
$var_logoPlace = $_POST['logoPlace'];
$var_material1 = $_POST['material1'];
$var_material1P= $_POST['material1P'];
$var_material2 = $_POST['material2'];
$var_material2P = $_POST['material2P'];
$var_material3 = $_POST['material3'];
$var_material3P = $_POST['material3P'];
$var_taxGroup = $_POST['taxGroup'];
$var_PZ1 = $_POST['PZ1'];
$var_PZ2 = $_POST['PZ2'];
$var_PZ3 = $_POST['PZ3'];
$var_PZ4 = $_POST['PZ4'];
$var_PZ5 = $_POST['PZ5'];
$var_PZ6 = $_POST['PZ6'];
$var_PZ40 = $_POST['PZ40'];
$var_PZ41 = $_POST['PZ41'];
$var_PZ42 = $_POST['PZ42'];
$var_PZ43 = $_POST['PZ43'];
$var_pz44 = $_POST['PZ44'];
$var_replenBy = $_POST['replenBy'];
$var_weight = $_POST['weight'];
$var_convey = $_POST['convey'];
$var_origin = $_POST['origin'];
$var_gender = $_POST['gender'];
$var_kidProduct = $_POST['kidProduct'];
$var_keyword1 = $_POST['keyword1'];
$var_keyword2 = $_POST['keyword2'];
$var_domain = $_POST['domain'];
$var_subDiv = $_POST['subDiv'];
$var_dep = $_POST['dep'];
$var_subDep = $_POST['subDep'];
$var_class = $_POST['class'];
$var_subClass = $_POST['subClass'];
$var_company100Cost = $_POST['company100Cost'];
$var_company200Cost = $_POST['company200Cost'];
$var_company400Cost = $_POST['company400Cost'];
$var_company401Cost = $_POST['company401Cost'];
$var_company402Cost = $_POST['company402Cost'];
$var_company403Cost = $_POST['company403Cost'];
$var_company400Cost = $_POST['company404Cost'];
$var_company900Cost = $_POST['company900Cost'];
$var_trackInventory = $_POST['trackInventory'];


$sqlInsert = " INSERT INTO POC.Product( SKUID, prod_Desc, department, vendorSKU, vendor, team, brand, style, logoApp, logoPlace, playerName, material1, material_1_percent, material2, material_2_percent, material3, material_3_percent, taxGroup, PZ1, PZ2, PZ3, PZ4, PZ5, PZ6. PZ40, PZ41, PZ42, PZ43, PZ44, packaging, replenBy, weight, convey, origin, gender, kidProduct, keyword1, keyword2, domain, subDiv, dep, subDep, class, subclass, company100Cost, company200Cost, company400Cost, company401Cost, company402Cost, company403Cost, company404Cost, company900Cost, trackinventory) VALUES ($var_skuid, $var_prod_desc, $var_department, $var_vendorSKU, $var_vendor, $var_brand, $var_style, $var_logoApp, $var_logoPlace, $var_material1, $var_material1P, $var_material2, $var_material2P, $var_material3, $var_material3P, $var_taxGroup, $var_PZ1,  $var_PZ2, $var_PZ3, $var_PZ4, $var_PZ5, $var_PZ6, $var_PZ40, $var_PZ41, $var_PZ42, $var_PZ43, $var_pz44, $var_replenBy, $var_weight, $var_convey, $var_origin, $var_gender, $var_kidProduct, $var_keyword1, $var_keyword2, $var_domain, $var_subDiv, $var_dep, $var_subDep, $var_class, $var_subClass, $var_company100Cost, $var_company200Cost, $var_company400Cost, $var_company401Cost, $var_company402Cost, $var_company403Cost, $var_company400Cost, $var_company900Cost, $var_trackInventory )";




/*$resultFindSKU =($conn, $tsql2); */

if (sqlsrv_query($conn, $tsql2)) {  
    echo "Statement executed.\n";  
} else {  
    echo "Error in statement execution.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  


mysqli_close($conn);
?>

