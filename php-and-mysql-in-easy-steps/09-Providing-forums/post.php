<?php
	# access to session data 
	session_start(); 
	
	# statements to redirect the browser to the login
	# page if the user is not already logged in 
	if(!isset($_SESSION['user_id']))
	{
		require('login_tools.php'); 
		load(); 
	}
	
	# statements to set the page title and include a page header 
	$page_title = 'Post Message'; 
	include('includes/header.html'); 
	
	# statement to display the form 
	echo '<form action="post_action.php" method="POST" 
			accept-charset="utf-8"> 
	<p> Subject : <br>
	<input name="subject" type="text" size="64"></p>
	<p> Message : <br>
	<textarea name="message" rows="5" cols="50"></textarea></p>
	<p><input type="submit" value="Submit"></p>
	</form>'; 
	
	# hyperlinks to other pages on site 
	echo '<p>
	<a href="forum.php">Forum</a> | 
	<a href="shop.php">Shop</a>	|
	<a href="home.php">Home</a> |
	<a href="goodbye.php">Logout</a></p>'; 
	
	# footer 
	include('includes/footer.html'); 
?> 