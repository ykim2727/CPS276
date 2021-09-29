<?php

$mainList = [1,2,3,4];
$subList = [1,2,3,4,5];
$output = "<ul>";

foreach($mainList as $nums){
    $output .= "<li>$nums<ul>";
        foreach($subList as $subNums){
            $output .= "<li>$subNums</li>";
        }
        $output .= "</ul></li>";
}

$output .= "</ul>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <?php 
    
    echo $output; 
    
    ?>
</body>
</html>