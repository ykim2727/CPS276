<?php
    $output = "";
    if(count($_POST) > 0){
        require_once 'Directories.php';
        $addDirectory = new Directories();
        $output = $addDirectory->submit();
       }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Assignment 5 Form</title>
  </head>
  <body>
    <main>
        <div class="container">
            <h1>File and Directory Assignment</h1>
            <form method="post" action="index.php">
                <div class="form-group">
                    <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>
                    <?php 
                        echo $output;
                    ?>
                </div>
                <div class="form-group">
                    <label for="folderName">Folder Name</label>
                    <input type="text" class="form-control" id="folderName" name="folderName">
                </div>
                <div class="form-group">
                    <label for="fileContents">File Contents</label>
                    <textarea style="height: 150px;" type="password" class="form-control" id="fileContents" name="fileContents"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submitbutton">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>