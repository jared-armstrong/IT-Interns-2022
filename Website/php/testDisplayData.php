<!DOCTYPE html>
<html lang="">

<body>
    <h1>DISPLAY DATA PRESENT IN CSV</h1>
    <h3>Displaying Table: </h3>

    <?php
    echo "<html><body><table>\n\n";

    // Open a file
    $file = fopen("test.csv", "r") or die("ERROR OPENING DATA");;

    $count = 0;
    // Fetching data from csv file row by row
    while (($data = fgetcsv($file)) !== false) {

        // HTML tag for placing in row format
        echo "<tr>";

        foreach ($data as $i) {

            echo "<td>" . htmlspecialchars($i)
                . "</td>";

        }
        echo "</tr> \n";

    }

    // Closing the file
    fclose($file);

    echo "\n</table></body></html>";
    ?>
</body>

</html>

<style>
    body {background-color: powderblue;}
    h1   {color: blue;}
    p    {color: red;}
    td {background-color: blue;
        border: 3px solid black;}

</style>

