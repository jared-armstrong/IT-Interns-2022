<?php

$myfile = fopen("php\\test.csv", "r") or die("Unable to open file!");

// Get total number of rows
$rowLength = file('test.csv');

// Flag is used to skip first row in csv (header)
$flag = true;

// $line is an array of the csv elements
while (($line = fgetcsv($myfile, 1000, ",")) !== FALSE) {

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
fclose($myfile);
