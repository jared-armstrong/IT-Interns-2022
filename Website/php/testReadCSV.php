<?php
$myfile = fopen("test.csv", "r") or die("Unable to open file!");

while (($line = fgetcsv($myfile)) !== FALSE) {
    //$line is an array of the csv elements
    print_r($line);
}


fclose($myfile);




?>