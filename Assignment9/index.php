<?php 
require_once 'Date_time.php';
$dt = new Date_time();
$notes = $dt->checkSubmit();
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Assignment 9</title>
  </head>
  <body>
    <main>
        <div class="container">
            <h1>Add Note</h1>
            <a href="displayNotes.php">Display Notes</a>
            <form method="post" action="index.php">
                <div class="form-group">
                    <?php 
                        echo $notes;
                    ?>
                </div>
                <div class="form-group">
                    <label for="dateTime">Date and Time</label>
                    <input type="datetime-local" class="form-control" id="dataTime" name="dateTime">
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea style="height:400px;" type="password" class="form-control"
                    id="noteContent" name="noteContent"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="addButton">Add Note</button>
            </form>
        </div>
    </main>
</body>
</html>