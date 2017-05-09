<?php

	# allow access to session data 
	session_start(); 
	
	# statments to redirect the browser to the login page if the user 
	# not already logged in 
	if(!isset($_SESSION['user_id']))
	{
		require('login_tools.php'); 
		load(); 
	}
	
	# set page title and include a page header 
	$page_title = 'Home'; 
	include('includes/header.html'); 
	
	# confirm the named user is logged in 
	echo "<h1>HOME</h1>
	<p>You are now logged in, 
	{$_SESSION['first_name']} {$_SESSION['last_name']}
	</p>"; 
	
	# create hyperlinks to other pages on this website 
	echo '<p>
	<a href="forum.php">Forum</a>
	<a href="shop.php">Shop</a>
	<a href="goodbye.php">Logout</a>
	</p>'; 
	
	# includes a page footer 
	include('includes/footer.html'); 

?> 