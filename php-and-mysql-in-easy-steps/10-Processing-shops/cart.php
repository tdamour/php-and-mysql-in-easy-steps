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
	$page_title = "Cart";
	include('includes/header.html');
	
	# statements to update the quantities if the page has been 
	# submitted for amendment 
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		foreach($_POST['qty'] as $item_id => $item_qty)
		{
			# Ensure values are integers 
			$id = (int) $item_id; 
			$qty = (int) $item_qty; 
			
			# Change quantity or delete if zero. 
			if($qty==0)
			{
				unset($_SESSION['cart'][$id]);
			}
			elseif($qty > 0)
			{
				$_SESSION['cart'][$id]['quantity'] = $qty; 
			}
		}
	}
	
	# initialize a grand total variable 
	$total = 0; 
	
	# statement to display the contents of the shopping cart, 
	# display a message if the cart is empty 
	if(!empty($_SESSION['cart']))
	{
		# insert a statement to open the database 
		require('../connect_db.php'); 
		
		# statements to retrieve data from the "shop" database for all 
		# associated items in the shopping cart 
		$q = "SELECT * FROM shop WHERE item_id IN ("; 
		foreach($_SESSION['cart'] as $id => $value)
		{
			$q .= $id.',';
		}
		$q = substr($q,0,-1).') ORDER BY item_id ASC'; 
		$r = mysqli_query($dbc,$q); 
		
		# statements to display the cart selections in a form that 
		# contains a table
		echo '<form action="cart.php" method="POST"><table>
		<tr><th colspan="5">Items in your cart</th></tr><tr>'; 
		
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			# Calcuate sub-totals and grand total 
			$subtotal = $_SESSION['cart'][$row['item_id']]['quantity']
			* $_SESSION['cart'][$row['item_id']]['price'];
			
			$total += $subtotal; 
			
			# Display the row 
			echo "<tr><td>{$row['item_name']}</td>
			<td>{$row['item_desc']}</td> 
			<td><input type=\"text\" size=\"3\"
			name=\"qty[{$row['item_id']}]\"
			value=\"{$_SESSION['cart'][$row['item_id']]['quantity']}\">
			</td> <td>@ {$row['item_price']} = </td>
			<td>".number_format($subtotal,2)."</td></tr>"; 
		}
		
		# statement to display the grand total at the end of the table 
		# and a submit button at the end of the form 
		echo '<tr><td colspan="5">
		Total = '.number_format($total,2).'</td></tr>
		</table>
		<input type="submit" value="Update My Cart">
		</form>'; 
		
		# close database connection 
		mysqli_close($dbc); 
	}
	else 
	{
		echo '<p>Your cart is currently empty</p>'; 
	}
	
	# hyperlinks to other pages on website, including a Checkout page 
	echo '<p>
		<a href="shop.php">Shop</a>
		<a href="checkout.php?total='.$total.'">Checkout</a>
		<a href="forum.php">Forum</a>
		<a href="home.php">Home</a>
		<a href="goodbye.php">Logout</a></p>';
		
	# footer 
	include('includes/footer.html'); 

?> 