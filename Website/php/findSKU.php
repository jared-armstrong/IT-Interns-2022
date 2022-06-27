<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/hamburger.css">
    <script src="../js/navigation.js"></script>
</head>
<body>
        <nav>
            <div class="navgrid">
                <a href="#"><img onclick="navToHome()" src="images/Logo.png" alt=""></a>
                <h2 id="one">Product Processing System</h2>
                <h2 id="two">PPS</h2>
            </div>
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>

                <ul class="menu__box">
                    <li onclick="navToHome()"><a class="menu__item" href="#">Home</a></li>
                    <li onclick="navToUPC()"><a class="menu__item" href="#">UPC Upload</a></li>
                    <li onclick="navToPricing()"><a class="menu__item" href="#">Pricing Upload</a></li>
                    <li><a class="menu__item" href="#">Vendor Catalog</a></li>
                    <li onclick="navToGenerate()"><a class="menu__item" href="#">SKU Creation</a></li>
                    <li onclick="navToFinder()"><a class="menu__item" href="#">SKU Lookup</a></li>
                    <li onclick="navToD365()"><a class="menu__item" href="#">D365 Portal</a></li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <input type="text" placeholder="Find SKU..." form name = "findSKU">
        </div>


  
<?php
$serverName = "ssdevd365salesautomation.database.windows.net";
$connectionInfo = array("Database" => "POC.Product", );
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