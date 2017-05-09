<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Ticks-Archives</title> 
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link rel="stylesheet" type="text/css" href="css/main.css"> 
<link rel="shortcut icon" href="images/animated_favicon1.gif"/> 
</head>

<body>
<?php
	# nominating a custom error handler function 
	set_error_handler('error_handler'); 
	
	# custom error handler function to display error details to the user
	# when called. 
	function error_handler($level,$message,$file,$line)
	{
		echo "Echo[$level] : $message<br>
				(Check line $line in $file)"; 
	}
	
	# initialize variable simulating a user input 
	$num = 500; 
	
	# trigger set to call custom error handler 
	if($num > 100)
	{
		trigger_error('Number must be less than 100', E_USER_ERROR);
	}
	
	
	


?> 
</body>
</html> 