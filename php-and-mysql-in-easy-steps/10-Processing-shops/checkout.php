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
	$page_title = "Checkout";
	include('includes/header.html');
	
	# statement to store the shopping cart items in the database
	# or provide a default message 
	if(isset($_GET['total']) && ($_GET['total']>0) && (!empty($_SESSION['cart'])))
	{
		# database connection 
		require('../connect_db.php'); 
		
		# statment to store the user ID, total order value, and current
		# date/time in the "orders" database table 
		$q = "INSERT INTO orders(user_id,total,order_date) VALUES(".$_SESSION['user_id'].",".$_GET['total'].", NOW())"; 
		$r = mysqli_query($dbc,$q); 
		
		# statement to  retrieve the current order number 
		$order_id = mysqli_insert_id($dbc); 
		
		# add statmentsd to retrieve the selected cart item details
		# from the "shop" database 
		$q = "SELECT * FROM shop WHERE item_id IN (";
		foreach($_SESSION['cart'] as $id => $value)
		{
			$q .= $id.',';
		}
		$q = substr($q,0,-1).') ORDER BY item_id ASC'; 
		$r = mysqli_query($dbc,$q); 
		
		# statements to store the item details in the "order_contents"
		# database 
		while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$query = "INSERT INTO order_contents(order_id,item_id,quantity,price)
			VALUES($order_id,".$row['item_id'].",".$_SESSION['cart'][$row['item_id']]['quantity'].
			",".$_SESSION['cart'][$row['item_id']]['price'].")";
			$result=mysqli_query($dbc,$query); 
		}
		
		# statements to close the database connection, display the 
		# confirmation message and empty the cart 
		mysqli_close($dbc); 
		echo"<p>Thanks for your order. Your Order Number is #".$order_id."</p>";
		$_SESSION['cart'] = NULL; 
		
	}
	else 
	{
		echo '<p>There are no items in your cart.</p>'; 
	}
	
	# hyperlinks to other pages on website, including a Checkout page 
	echo '<p>
		<a href="shop.php">Shop</a>
		<a href="forum.php">Forum</a>
		<a href="home.php">Home</a>
		<a href="goodbye.php">Logout</a></p>';
		
	# footer 
	include('includes/footer.html'); 


?> 