<?php
	$db = new mysqli('localhost', 'cs143', '', 'CS143');
    if($db->connect_errno)
    	die('Error connecting to the database');
    $movie = $_GET['movie'];
    $sql = "SELECT title, year FROM Movie WHERE title like '$movie%' ORDER BY title";

	$result = $db->query($sql)
    if($result){
    	while($row = $result->fetch_object())
    		echo "<option value='".$row->title." (".$row->year.")'>";
    }
    else
    	echo mysqli_error($db); 
?>