<?php
	require('../connect_db.php'); 
	
	# initialze variable with an SQL Query string 
	$q = 'SHOW TABLES'; 
	
	# intialize variable with the result of a query to the database
	# on the MySQL Server 
	$r = mysqli_query($dbc,$q); 
	
	# test whether query succeeded and display an appropriate 
	# message 
	if($r)
	{
		echo '<h1>Result set Returned OK</h1>';
	}
	else
	{
		echo'<p>'.mysqli_error($dbc).'</p>'; 
	}
	
	mysqli_close($dbc); 


?> 