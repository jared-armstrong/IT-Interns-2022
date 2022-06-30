<?php
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

fclose($myfile);




?>