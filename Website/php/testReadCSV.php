<?php
$myfile = fopen("test.csv", "r") or die("Unable to open file!");

$count = 0;
$key = 0;

// Get total number of rows
$rowLength = file('test.csv');

// $line is an array of the csv elements
while (($line = fgetcsv($myfile)) !== FALSE) {

    // Get total number of columns
    $colLength = count($line);

    // Check that iteration stays within range of rows
    while ($count > 0) {
        while ($count < $rowLength) {
            //Check that defined columns in range
            while ($key < $colLength) {
                echo $line[$key];
                $key ++;
                if ($key == ($colLength)){
                    echo "\n";
                }
            }
            echo "test";
            $count ++;
        }
    }

    for ($count = 0; $count < 1; $count++) {
    }
}

/*
Buyer sheet Processing. Assuming CSV.
______________________________________


Assumptions: CSV file format following the template sheet, 
empty boxes are just double commas,
endline characters are end of ROW,


*/

fclose($myfile);
