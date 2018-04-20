



<html>
  <head>
    <title>Query Interface </title>
  </head>

<body>
  <h1>Query Interface </h1>


  <p>
    <form action = "query.php" form method = "GET">
      Write down your SQL commends in the following box:<br>
      <textarea name="query" cols="60" rows="8">
      </textarea>
      <br />
      <input type ="submit" value ="Enter">
    </form>
  </p>
  


<?php

$db = new mysqli('localhost', 'cs143', '', 'CS143');

if($db->connect_errno > 0){
  die('Unable to connect to database [' . $db->connect_error . ']');
}

  if(isset($_GET["query"])){
    $query = $_GET["query"];
    $rs = $db -> query($query);
  
  while($row = $rs->fetch_assoc())
    echo htmlentities($row['_message']);
  
  $rs->free();

}
$db->close();



?>







