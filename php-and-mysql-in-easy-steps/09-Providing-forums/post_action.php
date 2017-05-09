<?php
	# allow access to session data 
	session_start(); 
	
	# statement to make load function avaiable 
	require('login_tools.php'); 
	
	# statements to redirect the browser to the login page 
	# if the user is not already logged in 
	if(!isset($_SESSION['user_id'])){load();}
	
	# statments to set the page title and include a page header 
	$page_title='Post Error'; 
	include('includes/header.html'); 
	
	# statement block to ensure the submitted form fields are not empty
	# or display an error message 
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(empty($_POST['subject']))
		{echo '<p>Please enter a subject for this post.</p>';}
		
		if(empty($_POST['message']))
		{echo '<p>Please enter a message for this post.</p>';}
	
		# statement block to add form data to the MYSQL "forum" database table 
		if(!empty($_POST['subject']) && !empty($_POST['message']))
		{
			require('../connect_db.php'); 
			$q = "INSERT INTO forum(first_name,last_name,subject,message,post_date)
			VALUES(
			'{$_SESSION[first_name]}',
			'{$_SESSION[last_name]}',
			'{$_SESSION[subject]}',
			'{$_SESSION[message]}',
			NOW() )";
			
			$r = mysqli_query($dbc,$q); 
			
			# statements to display the forum message on success 
			# or display a MYSQL error message on failure 
			if(mysqli_affected_rows($dbc) != 1)
			{
				echo '<p>Error</p>'.mysqli_error($dbc); 
			}
			else
			{
				load('forum.php'); 
			}
			
			mysqli_close($dbc); 
		}
	}
	
	# hyperlink back to the forum page 
	echo '<p><a href="forum.php">Forum</a>'; 
	
	# include page footer 
	include('includes/footer.html'); 
?> 