<?php


/*CONNECTION START*/
$serverName = "ssdevd365salesautomation.database.windows.net";
$connectionInfo = array("Database", "POC.Product", );
$conn = sqlsrv_connect($serverName, $connectionInfo);


if($conn == false){
  echo " Unable to connect to Database. </br>";
  die(print_r(sqlsrv_errors(), true));
}

/* User login ??????? */
$var_SKU = ['form-findSKU'];
$tsql2 = "SELECT * FROM Product AS p WHERE p.SKUID = '$var_SKU' ";
/*$resultFindSKU =($conn, $tsql2); */

if (sqlsrv_query($conn, $tsql2)) {  
    echo "Statement executed.\n";  
} else {  
    echo "Error in statement execution.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  


/*CONNECTION END*/




/* FILE PROCESS BEGIN */
$myfile = fopen("test.csv", "r") or die("Unable to open file!");

while (($line = fgetcsv($myfile)) !== FALSE) {
    //$line is an array of the csv elements

    print_r($line);
}

/*
Buyer sheet Processing. Assuming CSV.
______________________________________


Assumptions: CSV file format following the template sheet, 
empty boxes are just double commas,
endline characters are end of ROW,


*/


/* INPUT ARRAY DATA STRUCTURE */


$inputArray = array($var_skuid,
$var_prod_desc,
$var_department,
$var_vendorSKU,
$var_vendor,
$var_brand,
$var_style,
$var_team,
$var_playerName,
$var_logoApp,
$var_logoPlace,
$var_material1,
$var_material1P,
$var_material2,
$var_material2P,
$var_material3,
$var_material3P,
$var_taxGroup,
$var_PZ1,
$var_PZ2,
$var_PZ3,
$var_PZ4,
$var_PZ5,
$var_PZ6,
$var_PZ40,
$var_PZ41,
$var_PZ42,
$var_PZ43,
$var_pz44,
$var_packaging,
$var_replenBy,
$var_weight,
$var_convey,
$var_origin,
$var_gender,
$var_kidProduct,
$var_keyword1,
$var_keyword2,
$var_domain,
$var_subDiv,
$var_dep,
$var_subDep,
$var_class,
$var_subClass,
$var_company100Cost,
$var_company200Cost,
$var_company400Cost,
$var_company401Cost,
$var_company402Cost,
$var_company403Cost,
$var_company400Cost,
$var_company900Cost,
$var_trackInventory,
)







fclose($myfile);


mysqli_close($conn);



?>