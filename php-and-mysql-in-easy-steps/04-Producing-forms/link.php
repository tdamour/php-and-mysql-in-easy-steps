<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title> 
</head>
<body>
<?php

// statement that sneaks the an element("it") within the $_GET array
if(isset($_GET['id']))
{
	// handler statement to assign a passed value to a like-named PHP variable
	$id = $_GET['id']; 
	
	// handler statement to output an appropriate response according to 
	// the value passed 
	switch($id)
	{
		case 1: echo 'Cow selected <hr>'; break; 
		case 2: echo 'Dog selected<hr>'; break; 
		case 3: echo 'Goat selected<hr>'; break; 
	}

}

	// statements to display hyperlinks with appended values 
	echo '<h1>Select a buddy</h1>'; 
	echo '<p><a href="link.php?id=1">Cow</a> |'; 
	echo '<a href="link.php?id=2">Dog</a> |'; 
	echo '<a href="link.php?id=3">Goat</a></p>'; 


?> 
</body>
</html>