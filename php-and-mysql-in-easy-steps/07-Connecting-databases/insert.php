<?php
	require('../connect_db.php'); 
	
	# add a function to display all records in an existing table
	# or display an error message 
	function show_records($dbc)
	{
		# variable intialize 
		$q = 'SELECT * FROM prints';
		# returns TRUE value when query succeeds 
		$r = mysqli_query($dbc,$q); 
		
		if($r)
		{
			echo '<h1>Records in prints table</h1>'; 
			
			while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
			{
				echo '<br>'.$row['id'].'|'.$row['name'].'@'.$row['price'];
			}
		}
		else
		{
			echo '<p>'.mysqli_error($dbc).'</p>'; 
		}
	}
	
	# call the function to display all the records 
	show_records($dbc); 
	
	# Create and execute another query to add rows to the table
	$q = 'INSERT INTO prints(name,price)
	VALUES
	("One Center", 32.99), ("Yellow Red Blue", 36.99)'; 
	
	# update database & table 
	$r = mysqli_query($dbc,$q);
	
	# function called to display all records again or display an 
	# error message if the change failed 
	if($r)
	{
		show_records($dbc); 
	}
	else
	{
		echo '<p>'.mysqli_error($dbc).'</p>'; 
	}
	
	# close MYSQL Server database 
	mysqli_close($dbc); 
?>