<?php
  require('../connect_db.php'); 
  
  # function to display all records in an existing table 
  # or display an error message 
  function show_records($dbc)
  {
	  $q='SELECT * FROM watches'; 
	  $r=mysqli_query($dbc,$q); 
	  
	  $num=mysqli_num_rows($r); 
	  
	  if($num>0)
	  {
		  echo '<h1>Records in watches table</h1>'; 
		  
		  while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		  {
			  echo '<br>'.$row['model'].' | '.$row['style'].' @ '.$row['price'];
		  }
	  }
	  else
	  {
		  echo '<p>'.mysqli_error($dbc).'</p>'; 
	  }
  }
  
  # function to display all records 
  show_records($dbc); 
  
  # create and execute another query to update two records in the table
  # that have a specified value
  $q = 'UPDATE watches SET style="Gents" WHERE style="Ladies"'; 
  $r = mysqli_query($dbc,$q); 
  
  # function to display all records again if the expected number of records
  # have been updated 
  if(mysqli_affected_rows($dbc) == 2)
  {
	  echo '<hr>'.mysqli_affected_rows($dbc).' Records Updated..'; 
	  show_records($dbc); 
  }
  
  # close 
  mysqli_close($dbc); 



?>