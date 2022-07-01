<!DOCTYPE html>
<html lang="">

<body>
<h1>DISPLAY DATA PRESENT IN CSV</h1>
<h3>Displaying Table: </h3>

<div class="container">
    <?php
    $handle = fopen("test.csv", "r");
    echo '<table>';
    //display header row if true
    if ("test.csv") {
        $csvcontents = fgetcsv($handle);
        echo '<tr>';
        foreach ($csvcontents as $headercolumn) {
            echo "<th>$headercolumn</th>";
        }
        echo '</tr>';
    }
    // displaying contents
    while ($csvcontents = fgetcsv($handle)) {
        echo '<tr>';
        foreach ($csvcontents as $column) {
            echo "<td>$column</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
    fclose($handle);
    ?>
</div>

</body>

</html>

<style>
    .container {background-color: powderblue;
        overflow: auto;
        width: 80%;
        height: 600px;
        margin: 0 auto;}
    h1   {color: blue;
        text-align: center}
    h3    {color: red;
        text-align: center}
    td {background-color: blue;
        border: 3px solid black;}

</style>

