<?php

$myfile = fopen("test.csv", "r") or die("Unable to open file!");

$key = 0;

$test = array();

// Get total number of rows
$rowLength = file('test.csv');

// Flag is used to skip first row in csv (header)
$flag = true;

// $line is an array of the csv elements
while (($line = fgetcsv($myfile)) !== FALSE) {

    // Skips first $line call of $myfile
    if($flag) { $flag = false; continue; }

    // Get total number of columns
    $colLength = count($line);

    // Individually grabs every value of a $line
    while ($key < $colLength) {
        echo $line[$key];
        $key++;
        if ($key == ($colLength)) {
            echo "\n";
        }
    }
}
fclose($myfile);
