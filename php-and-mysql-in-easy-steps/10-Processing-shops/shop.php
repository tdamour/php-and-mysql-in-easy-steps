<?php 
	# session start 
	session_start(); 
	
	# add statements to redirect the browser to the login page 
	# if user is not already logged in. 
	if(!isset($_SESSION['user_id']))
	{
		require('login_tools.php'); 
		load(); 
	}
	
	# statements to set the page title and include a page header 
	$page_title = 'Shop'; 
	include('includes/header.html'); 
	
	# statement to open the database connection
	require('..connect_db.php'); 
	
	# statments to retrieve all items from the database or provide 
	# a default message 
	$q = "SELECT * FROM shop"; 
	$r = mysqli_query($dbc,$q); 
	
	if(mysqli_num_rows($r) > 0)
	{
		# statements displaying all items retrieved from the database 
		# table then closing the database connection
		echo '<table><tr>'; 
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			echo '<td><strong>'.$row['item_name'].'</strong><br>'.$row['item_desc'].
				'<br><img src='.$row['item_img'].'><br>$'.$row['item_price'].'<br>
				<a href="added.php?id='.$row['item_id'].'">Add To Cart</a></td>'; 
		}
		echo '</tr></table>'; 
		mysqli_close($dbc); 
	}
	else
	{
		echo '<p>There are currently no items in this shop</p>'; 
	}
	
	# hyperlinks to other pages 
	echo '<p><a href="cart.php">View Cart</a>
		<a href="forum.php">Forum</a>
		<a href="home.php">Home</a>
		<a href="goodbye.php">Logout</a></p>'; 
		
	# footer 
	include('includes/footer.html'); 
?>