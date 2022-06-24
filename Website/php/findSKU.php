<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/navigation.js"></script>
</head>
<body>
        <nav>
            <div class="navgrid">
                <a href="#"><img onclick="navToHome()" src="images/Logo.png"></a>
                <h2 id="one">Product Processing System</h2>
                <h2 id="two">PPS</h2>
                    <ul>
                        <li onclick="navToHome()"><a href="#">Home</a></li>
                        <li onclick="navToPricing()"><a href="#">Pricing</a></li>
                        <li onclick="navToGenerate()"><a href="#">SKU Generator</a></li>
                        <li onclick="navToFinder()"><a href="#">SKU Finder</a></li>
                        <li onclick="navToUPC()"><a href="#">UPC Upload</a></li>
                    </ul>
            </div>
        </nav>


        <div class="container">
            <input type="text" placeholder="Find SKU..." form name = "findSKU">
        </div>


  
<?php
$serverName = " ";
$connectionInfo = array("Database" => "POC", );
$conn = sqlsrv_connect($serverName, $connectionInfo);


if($conn == false){
  echo " Unable to connect to Database. </br>";
  die(print_r(sqlsrv_errors(), true));
}

/* User login ??????? */
$var_SKU = $_POST['form-findSKU'];
$tsql2 = "SELECT * FROM Product AS p WHERE p.SKUID = '$var_SKU' ";
/*$resultFindSKU =($conn, $tsql2); */

if (sqlsrv_query($conn, $tsql2)) {  
    echo "Statement executed.\n";  
} else {  
    echo "Error in statement execution.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  


mysqli_close($conn);
?>



  
  <footer id="footer">
        <p>© Lids Inc. 2022. All Rights Reserved.</p> 
  </footer>

  
</body>
</html>