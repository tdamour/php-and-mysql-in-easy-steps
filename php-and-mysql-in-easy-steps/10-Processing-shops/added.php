<?php
	# access to session data 
	session_start(); 
	
	# statement to redirect browser to login page if the user is not 
	# already logged in 
	if(!isset($_SESSION['user_id']))
	{
		require('login_tools.php'); 
		load(); 
	}
	
	# set page title and include page header 
	$page_title = "Cart Addition";
	include('includes/header.html'); 
	
	# assign passed item ID to a variable 
	if(isset($_GET['id'])) $id=$_GET['id']; 
	
	# open database 
	require('..\connect_db.php'); 
	
	# statements to retrieve the selected item's data from the database 
	$q = "SELECT * FROM shop WHERE item_id = $id";
	$r = mysqli_query($dbc,$q); 
	
	if(mysqli_num_rows($r) == 1)
	{
		$row = mysqli_fetch_array($r,MYSQLI_ASSOC); 
		
		# statements to add the selected item to the cart and display 
		# an appropriate confirmation message 
		if(isset($_SESSION['cart'][$id]))
		{
			$_SESSION['cart'][$id]['quantity']++; 
			echo '<p>Another'.$row["item_name"].' has been added to your cart</p>'; 
		}
		else
		{
			$_SESSION['cart'][$id] = array('quantity'=>1, 'price'=>$row['item_price']); 
			echo '<p>A '.$row["item_name"].' has been added to your cart</p>';
		}
	}
	
	# close database connection 
	mysqli_close($dbc); 
	
	# hyperlinks to other pages 
	echo '<p>
		<a href="shop.php">Shop</a>
		<a href="cart.php">View Cart</a>
		<a href="forum.php">Forum</a>
		<a href="home.php">Home</a>
		<a href="goodbye.php">Logout</a></p>';
		
	# footer 
	include('includes/footer.html'); 
?> 