<?php
    $output = "";
    if(count($_POST) > 0){
        require_once 'fileUploadProc.php';
        $addFiles = new Files();
        $output = $addFiles->verifyFile();
       }
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Assignment 7</title>
  </head>
  <body>
    <main>
        <div class="container">
            <h1>File Upload</h1>
            <a href="links.php">Show File List</a>
            <p><?php echo $output ?></p>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="filenamefield">File Name</label>
                    <input type="text" class="form-control" id="filenamefield" name="filename">
                </div>
                <div class="form-group">
                    <label for="fileSelectField"></label>
                    <input type="file" name="file" id="fileselectedname">
                </div>
                <button type="submit" class="btn btn-primary" name="submitbutton">Upload File</button>
            </form>
        </div>
    </main>
</body>
</html>