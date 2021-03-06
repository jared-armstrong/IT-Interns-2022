<?php


/*CONNECTION START*/

$serverName = "ssdevd365salesautomation.database.windows.net";
$connectionInfo = array("Database", "POC.Product", );
$conn = sqlsrv_connect($serverName, $connectionInfo);


if($conn == false){
  echo " Unable to connect to Database. </br>";
  die(print_r(sqlsrv_errors(), true));
}

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (sqlsrv_query($conn, $tsql2)) {  
    echo "Statement executed.\n";  
} else {  
    echo "Error in statement execution.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  


/*CONNECTION END*/


/* Checking File Error START */

/*FILE HANDLING  */

try {
   
    if(file_exists("testfile.txt")){
        $myfile = fopen("test.csv", "r");
    }else{
        throw new RuntimeError("Cannot Open File");
    }

    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    $finfo = finfo_open(FILEINFO_MIME_TYPE); // Return MIME type
    echo finfo_file($finfo, $filename);
        //if( finfo_file($finfo, $filename)) !== ''
    finfo_close($finfo);


//Check Web server Upload Load does not exceed amount

    if ($_FILES['upfile']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }


    // You should name it uniquely.
    // On this example, obtain safe unique name from its binary data.
    if (!move_uploaded_file(
        // UPLOAD SUCCESS?
        $_FILES['uploadedFiles']['cur_file'],
        sprintf('./uploads/%s.%s',
            sha1_file($_FILES['upfile']['tmp_name']),
            $ext
        )
    )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }

    echo 'File is uploaded successfully.';

} catch (RuntimeException $e) {

    echo $e->getMessage();

}




/* FILE PROCESS BEGIN */
while (($line = fgetcsv($myfile)) !== FALSE) {

    // Initialize on reiteration for nested while to function
    $key = 0;

    // Skips first $line call of $myfile
    if($flag) { $flag = false; continue; }

    // Get total number of columns
    $colLength = count($line);

    // Individually grabs every value of a $line
    while ($key < $colLength) {
        // Not actual functionality. Needs to append to array for SQL statement
        echo $line[$key];
        $key++;

        // Use to break lines. Only useful for testing in console
        if ($key == ($colLength)) {
            echo "\n";
        }
    }
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
);



fclose($target_file);
fclose($myfile);
mysqli_close($conn);



?>