<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CS143 Project 1c</title>

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="lab1c.css" rel="stylesheet">

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
          <h3><b> Searching Page :</b></h3>
         <hr>
          <label for="search_input">Search:</label>
          
            <form method="GET" action="search.php">
                <div class="form-group">
                  <input type="text" id="search_input" class="form-control" placeholder="Search..." name="result"><br>
                </div>
                <button type="submit" class="btn btn-default" style="margin-bottom:10px">GO</button>
          </form>
 
  <?php 

  if(isset($_GET["result"])){

    $db = new mysqli('localhost', 'cs143', '', 'CS143');
    
    $result = $_GET["result"];

    $keyword = split(' ', $result);
    echo "<p>Hello World.</p>";
    
    print("<h2>Actors Found</h2>");
      print("<table border=\"1\">");
      print("<tr>");
      print("<th>id</th>");
      print("<th>name</th>");
      print("<th>DOB</th>");
      print("</tr>");
      #search_actors($word_list,$db_connection);
      print("</table>");
      print("<br>");
      print("<br>");
      print("<br>");

    echo "<h4><b>matching Actors are:</b></h4><div class='table-responsive'> <table class='table table-bordered table-condensed table-hover'><thead> <tr><td>Name</td><td>Date of Birth</td></thead></tr><tbody>";
    #search($keyword, $db, "actor");

    $db->close();
  }
?>
        </div>
      </div>
    </div>






</body>
</html>