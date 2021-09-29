<?php

$rows = [];
$cells = [];

for ($i=1;$i<=15;$i++){
    array_push($rows,$i);
}

for ($o=1;$o<=5;$o++){
    array_push($cells,$o);
}

$table = "<table border='1'>";

foreach ($rows as $row){
    $table .= "<tr>";
    foreach($cells as $cell){
        $table .= "<td>Row $row Cell $cell</td>";
    }
    $table .= "</tr>";
}

$table .= "</table>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <?php
        echo $table;
    ?>
</body>
</html>