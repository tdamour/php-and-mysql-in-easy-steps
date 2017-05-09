<?php
	# starts session 
	session_start(); 
	
	# statement to redirect the browser to the login page if
	# the user is not already logged in. 
	if(!isset($_SESSION['user_id']))
	{
		require('login_tools.php');
		load(); 
	}
	
	# statement to set the page title and include a page header
	$page_title = 'Forum'; 
	include('includes/header.html'); 
	
	# open database connection 
	require('..\connect_db.php'); 
	
	# add statments to retrieve messages from the database 
	# or provide a default message 
	$q = "SELECT * FROM forum"; 
	$r = mysqli_query($dbc,$q); 
	if(mysqli_num_rows($r)>0)
	{
		# statements to write table displaying all messages
		# retrived from database table if any found 
		echo'<table><tr><th>Posted by</th>
		<th>Subject</th> <th id="msg">Message</th></tr>'; 
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			echo '<tr>
			<td>'.$row['first_name'].''.$row['last_name'].'<br>'
			.$row['post_date'].'</td>
			<td>'.$row['subject'].'</td><td>'.$row['message'].'</td>
			</tr>'; 
		}
		
		echo '</table>'; 
	}
	else
	{
		echo '<p>There are currently no messages.</p>'; 
	}
	
	# hyperlinks to other pages on website including post message
	echo '<p>
	<a href="post.php">Post Message</a> | 
	<a href="shop.php">Shop</a>	|
	<a href="home.php">Home</a> |
	<a href="goodbye.php">Logout</a></p>'; 
	
	# close database connection 
	mysqli_close($dbc); 
	
	# page footer 
	include('includes/footer.html'); 
?> 