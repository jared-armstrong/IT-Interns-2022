<?php

// Open file to process
$myfile = fopen("C:\Users\henkeh\Desktop\gest2.csv", "r") or die("Unable to open file!");

// Flag is used to skip first row in csv (header)
$flag = true;

// $line is an array of the csv elements
while (($line = fgetcsv($myfile, 1000, ",")) !== FALSE) {

    // Initialize on reiteration for nested while to function
    $key = 0;

    // Get length of column for iteration
    $colLength = count($line);

    // Skips first $line call of $myfile
    if($flag) { $flag = false; continue; }

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