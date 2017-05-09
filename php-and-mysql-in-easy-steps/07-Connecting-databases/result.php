<?php
	require('../connect_db.php'); 
	
	# variable with an SQL query string 
	$q = 'SHOW TABLES';

	# initialize another variable with the result of a query to the 
	# database on the MySQL Server 
	$r = mysqli_query($dbc,$q); 
	
	# Test whether the query succeeded and display an appropriate message
	if($r)
	{
		echo '<h1>Tables on site_db database</h1>'; 
		
		# insert statements to display the data contained in each returned
		# row and free the result set resource
		# if array is not explicitly specified the mysqli_fetch_array()
		# function returns both types by default
		while($row = mysqli_fetch_array($r,MYSQLI_NUM))
		{
			echo '<br>'.$row[0];
		}
		mysqli_free_result($r); 
	}
	else
	{
		echo '<p>'.mysqli_error($dbc).'</p>'; 
	}
	
	# close
	mysqli_close($dbc); 


?>