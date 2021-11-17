<?php
    require_once 'Date_time.php';
    $dt = new Date_time();
    $notes = $dt->checkSubmit();
?>

<!doctype html>
<html lang="en">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Assignment 9 Notes</title>
  </head>
  <body>
    <main>
        <div class="container">
            <h1>Display Note</h1>
            <a href="index.php">Add Note</a>
            <form method="post" action="displayNotes.php">
                <div class="form-group">
                    <label for="begDate">Beginning Date</label>
                    <input type="date" class="form-control" id="begDate" name="begDate">
                </div>
                <div class="form-group">
                    <label for="endDate">End Date</label>
                    <input type="date" class="form-control" id="endDate" name="endDate">
                </div>
                <button type="submit" class="btn btn-primary" name="displaynotes">Get Notes</button>
            </form>
            <div>
            <?php
                echo $notes;
            ?>
            </div>
        </div>
    </main>
</body>
</html>