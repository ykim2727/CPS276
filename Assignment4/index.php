<?php
    if(count($_POST) >= 0){
        require_once 'addNameProc.php';
        $addName = new AddNamesProc();
        $output = $addName->addClearNames();
       }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class = "container">
            <h1>Add Names</h1>
            <form method="post" action="index.php">
                <button type="submit" class="btn btn-primary" name="addName">Add Name</button>
                <button type="submit" class="btn btn-primary" name="clearName">Clear Names</button>
                    <div class="form-group">
                        <label for="nameField">Enter Name</label>
                        <input type="text" class="form-control" id="nameField" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="nameList">List of Names</label>
                        <textarea style="height: 400px;" type="password" class="form-control" id="nameList" name="nameList">
                            <?php 
                                echo $output;
                            ?>
                        </textarea>
                    </div>
            </form>
        </div>
    </main>
    
</body>
</html>