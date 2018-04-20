<html>
  <head>
    <title>My Caculator</title>
  </head>
<body>
  <h1>Calculator</h1>


  <p>
    <form action = "caculator.php" form method = "GET">
      expression:<input type="text" name ="expr"><br><br>
      <input type ="submit" value ="Calculate">
  </form>


</body>
</html>

<?php
  if(isset($_GET["expr"])){
  $res = 0;
  $pattern = "/^-?\d+(\.\d+)?\s*([+\-\\*]\s*\d+(\.\d+)?\s*)*$/";
   $zeropattern = '/^-?00+(\.\d+)?\s*([+\-\\*]\s*00+(\.\d+)?\s*)*$/';

  

  $str = $_GET["expr"];
  if(preg_match($zeropattern, $str)){
    echo "Invalid syntax.<br>";
  }
  else if(preg_match($pattern, $str)){
  eval('$res = '.$str.';');
  echo $str." = ".$res;
  }
  else{
  	echo "Invalid syntax.<br>";
  }
}
?>


