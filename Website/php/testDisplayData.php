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
    /* Houses all color variables for page color palette */
    :root {
        --LidsBlue: #001E4E;
        --LidsGrey: #D9D9D9;
        --LidsWhite: white;
    }

    * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        scrollbar-gutter: auto;
    }

    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        width: auto;
        background-color: var(--LidsGrey);
    }
    .container {background-color: var(--LidsBlue);
        overflow: auto;
        width: 80%;
        height: 700px;
        margin: 0 auto;}
    h1   {color: blue;
        text-align: center}
    h3    {color: red;
        text-align: center}
    th {color: var(--LidsWhite)}
    td {background-color: var(--LidsGrey)}

</style>

