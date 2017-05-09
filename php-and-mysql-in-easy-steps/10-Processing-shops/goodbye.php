<?php
	# session access 
	session_start(); 
 
	# statement to redirect browser to login page if the user is not 
	# already logged in 
	if(!isset($_SESSION['user_id']))
	{
		require('login_tools.php'); 
		load(); 
	}
	
	# set page title and include page header 
	$page_title = "Goodbye";
	include('includes/header.html');
	
	# statement to clear existing session variables 
	$_SESSION=array(); 
	
	# statement to end the session 
	session_destroy(); 
	
	# statement to display a confirmation message and provide a 
	# hyperlink back to the login page 
	echo '<h1>Goodbye!</h1>
	<p>You are now logged out.</p>
	<p><a href="login.php">Login</a></p>'; 
	
	# Footer 
	include('includes/footer.html');

?>