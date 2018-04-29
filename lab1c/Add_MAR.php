<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add_MAR</title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="lab1c.css" rel="stylesheet">
</head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header navbar-defalt">
          <a class="navbar-brand" href="index.php">CS143 DataBase Query System (Demo)</a>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <p>&nbsp;&nbsp;Add new content</p>
            <li><a href="Add_AD.php">Add Actor/Director</a></li>
            <li><a href="Add_M.php">Add Movie Information</a></li>
            <li><a href="Add_MAR.php">Add Movie/Actor Relation</a></li>
            <li><a href="Add_MDR.php">Add Movie/Director Relation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <p>&nbsp;&nbsp;Browsering Content :</p>
            <li><a href="Show_A.php">Show Actor Information</a></li>
            <li><a href="Show_M.php">Show Movie Information</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <p>&nbsp;&nbsp;Search Interface:</p>
            <li><a href="search.php">Search/Actor Movie</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3>Add Actors for Movie</h3>
            <form method="GET" action="Add_MAR.php" autocomplete="on">
                <div class="form-group">
                  <label for="movie">Movie Title</label>
                  <input type="text" class="form-control" placeholder="Text input" name="movie" list="movie_list" id="suggest">
                  <datalist id="movie_list">
                  <?php
                  $db = new mysqli('localhost', 'cs143', '', 'CS143');
                  if($db->connect_errno)
                    die('Error connecting to the database');
                  $sql = "SELECT title, year FROM Movie ORDER BY title";
                  $result = $db->query($sql);
                  if($result){
                  while($row = $result->fetch_object())
                    echo "<option value='$row->title ($row->year)'>";
                  }
                  else
                  echo mysqli_error($db); 
                  ?>
                  </datalist>
                </div>
                
                
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
<?php

  


  
?>
        </div>
      </div>
    </div>
  


</body>
</html>
