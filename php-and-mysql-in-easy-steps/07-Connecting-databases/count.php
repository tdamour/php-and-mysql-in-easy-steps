<?php
  require('../connect_db.php'); 
  
  # function to display all records in an existing table plus the 
  # total record count, or an error message 
  function show_records($dbc)
  {
	  $q = 'SELECT * FROM towels'; 
	  $r = mysqli_query($dbc,$q); 
	  
	  $num = mysqli_num_rows($r); 
	  
	  if($num > 0)
	  {
		  echo '<h1>Records in towels table</h1>'; 
		  
		  while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		  {
			  echo '<br>'.$row['name'].'|'.$row['color'].'@'.$row['price'];
		  }
		  echo "<br>$num Records"; 
	  }
	  else
	  {
		  echo '<p>'.mysqli_error($dbc).'</p>'; 
	  }
  }
  
  # function to display all records 
  show_records($dbc); 
  
  # create and execute another query to add a row to the table 
  $q = 'INSERT INTO towels(name,color,price)
  VALUES("Sunset","Orange",9.99)'; 
  $r = mysqli_query($dbc,$q); 
  
  # function to display all records again, or display an error message
  # if the change failed 
  if($r){show_records($dbc);}
  else{echo'<p>'.mysqli_error($dbc).'</p>';}
  
  # script close 
  mysqli_close($dbc); 

?> 