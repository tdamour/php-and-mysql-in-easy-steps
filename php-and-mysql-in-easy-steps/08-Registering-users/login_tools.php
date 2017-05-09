<?php 
	# loads page specified as its argument
	function load($page='login.php')
	{
		# load function block, statement inserted to remove any trailing 
		# slashes from URL string, then append a forwards slash 
		# and the specified page argument 
		$url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
		
		# function block, statement to build a URL string of protocol, 
		# current domain, and directory. 
		$url = rtrim($url,'/\\'); 
		$url .= '/'.$page; 
		
		# in this load function block, statments to load the 
		# specified page then quit the script 
		header("Location: $url"); 
		exit();
	}
	
	# function to validate the user login details as correct or supply
	# error messages 
	function validate($dbc,$email=", $pwd=")
	{
		# statement to initialize an array for error message 
		$errors = array(); 
		
		# statement to store an error message if the email field 
		# remains empty or store its value in a variable  
		if(empty($email))
		{
			$errors[] = 'Enter your email address.'; 
		}
		else
		{
			$e = mysqli_real_escape_string($dbc,trim($email));
		}
		
		# statements to store an error message if the password field
		# remains empty or store its value in a variable
		if(empty($pwd))
		{
			$errors[]='Enter your password'; 
		}
		else
		{
			$p = mysqli_real_escape_string($dbc,trim($pwd)); 
		}
		
		# statements to store an error message if the email and password
		# are not found in the database table, or return the associated
		# user id, first name, and last name to the caller - if the login
		# attempt succeeds 
		if(empty($errors))
		{
			$q = "SELECT user_id, first_name, last_name FROM user WHERE
				email ='$e' AND pass=SHA1('$p')"; 
			$r = mysqli_query($dbc,$q); 
			
			if(mysqli_num_rows($r) == 1)
			{
				$row = mysqli_fetch_array($r,MYSQLI_ASSOC);
				return array(true,$row);
			}
			else
			{
				$errors[] = 'Email address and password not found.';
			}
		}

		# statement in the validate function block to return the list 
		# of error messages to  the caller - if the login attempt fails 
		return array(false,$errors); 
	}

?>