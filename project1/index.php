<?php
    $i = 0;
    $output = "";
    while ($i < 10){
        $output .= $i."--";
        $i++;
    }
    $str = "Programming in PHP is cool";
    $arr = explode(" ",$str);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

$firstName = "justin";
$lastName = "kim";
$age = "25";
$ageTwo = 25;


if($firstName == $lastName){
    echo "equal";
}
else echo "not equal";

if ($age == $ageTwo){
    echo " EQUAL";
}

$string = <<<HTML
<p>This is a heredoc multi-line string with "quotes", the double quotes render because we are using 
the heredoc, where both 'single' and "double quotes" render</p>;
HTML;

echo $string;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Testing</title>
</head>
<body>
    <p>
    <?php echo $output;?>
        My name is <?php echo $firstName." ".$lastName?>. I am <?php echo $age ?> years old
        <label>Test</label>
        <input type = "text" class = "form-control" name ="firstname" id = "fname">
    </p>
</body>
</html>