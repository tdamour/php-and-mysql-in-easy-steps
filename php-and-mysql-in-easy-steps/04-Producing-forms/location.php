<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title> 
</head>
<body>
  <?php
  // display of retained $_SESSION array value 
	session_start(); 
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id']; 
		echo "Welcome user ID #$id"; 
	}
	
  
  
  ?> 
</body>
</html>