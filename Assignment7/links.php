<?php
    require_once 'listFilesProc.php';
    $listFiles = new Links();
    $output = $listFiles->getData();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Assignment 7 Files</title>
  </head>
  <body>
    <main>
        <div class="container">
            <h1>List Files</h1>
            <a href="index.php">Add File</a>
            <?php 
                echo $output;
            ?>
        </div>
    </main>
</body>
</html>