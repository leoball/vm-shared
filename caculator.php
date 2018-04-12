<html>
  <head>
    <title>My Caculator</title>
  </head>
<body>
  <h1>Calculator</h1>


  <p>
    <form action = "caculator.php" form method = "GET">
      expression:<input type="text" name ="expr"><br>
      <input type ="submit" value ="Calculate">
  </form>


</body>
</html>

<?php
  $str = 0;
  $str = $_GET["expr"];
  eval('$str = '.$str.';');
  echo $str;
?>
