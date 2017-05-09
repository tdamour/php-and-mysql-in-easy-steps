<?php 
 require('../connect_db.php');

 # add statements to retrieve a single piece of data from a database table
 # for validation 
	$q = 'SELECT price FROM watches WHERE model ="Boston"'; 

	$r = mysqli_query($dbc,$q); 
	
	while($row=mysqli_fetch_array($r,MYSQLI_NUM))
	{
		$var = $row[0]; 
	}
	
	# statements to test the retrieved data type & display an appropriate
	# result
	
	$result = is_numeric($var) ? 'numeric' : 'not numeric'; 
	echo "$var is $result<br>"; 
	
	$result = is_int($var) ? 'an integer' : 'not an integer'; 
	echo "$var is $result<br>"; 
	
	$result = is_float($var) ? 'a float' : 'not a float'; 
	echo "$var is $result<br>"; 
	
	$result = is_string($var) ? 'a string' : 'not a string'; 
	echo "$var is $result<br>"; 
	
	$result = is_null($var) ? 'NULL' : 'not NULL'; 
	echo "$var is $result<br>"; 
	
	$result = is_scalar($var) ? 'a variable' : 'not a variable'; 
	echo "$var is $result<br>"; 
	
	$result = is_array($var) ? 'an array' : 'not an array'; 
	echo "$var is $result<br>"; 
	
	$result = is_bool($var) ? 'is boolean' : 'is not boolean'; 
	echo "$var is $result<br>"; 
	
	$result = is_resource($var) ? 'a resource' : 'not resource'; 
	echo "$var is $result<br>"; 
	
	# Close
	mysqli_close($dbc); 

	
 
 


?>