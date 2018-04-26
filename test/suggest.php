
< ?php
 
	$db = mysqli_connect('localhost', 'cs143', '', 'CS143');
 
	$company    = $_GET['company'];
 
	$sql        = "SELECT title FROM Movie WHERE title LIKE '$company%'";

	$res        = $db->query($sql);
 	print_r($res);
	if(!$res)
		echo mysqli_error($db);
	else
		while( $row = $res->fetch_object() )
		{
			$title = $row->title
			echo "<option value='$title'>";
		}
 
?>
</option>


 
?>
