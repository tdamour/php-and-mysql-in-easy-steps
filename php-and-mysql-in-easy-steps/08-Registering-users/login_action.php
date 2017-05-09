<?php 
	# test block to see if login form has been submitted
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		#open database connection
		require('../connect_db.php'); 
		
		# make login tools available 
		require('login_tools.php'); 
		
		# statement to ensure login succeeded and get the 
		# associated user details of id, first name, and last name
		list($check,$data)= validate($dbc,$_POST['email'], $_POST['pass']);
		
		# statements to set the user details as session data and load a 
		# home page or assign error message
		if($check)
		{
			session_start(); 
			
			$_SESSION['user_id']=$data['user_id']; 
			$_SESSION['first_name']=$data['first_name']; 
			$_SESSION['last_name']=$data['last_name']; 
			
			load('home.php'); 
		}
		else
		{
			$errors=$data; 
		}
		
		# statement to close the database connection 
		mysqli_close($dbc); 
	}
	
	# continue display of login page when login attempt fails
	include('login.php'); 

?> 