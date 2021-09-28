<?php
$firstName = "justin";
$lastName = "kim";
$age = "25";

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
        My name is <?php echo $firstName." ".$lastName?>. I am <?php echo $age ?> years old
        <label>Test</label>
        <input type = "text" class = "form-control" name ="firstname" id = "fname">
    </p>
</body>
</html>