<?php
  # statements here 
  
  // create & intialize $yes and $no variables 
  $yes = TRUE; $no = FALSE; 
  
  // insert statments to display AND evalutions 
  $result = ($no && $no) ? 'TRUE' : 'FALSE'; 
    echo "No AND No returns $result<br>"; 
	
  $result = ($yes && $no) ? 'TRUE' : 'FALSE'; 
    echo "Yes AND No returns $result<br>"; 

  $result = ($yes && $yes) ? 'TRUE' : 'FALSE'; 
    echo "Yes AND Yes returns $result<hr>"; 
	
	// insert statments to display OR and NOT evalutions
	
	$result = ($no || $no) ? 'TRUE' : 'FALSE'; 
	  echo "No OR No returns $result<br>"; 
	
	$result = ($yes || $no) ? 'TRUE' : 'FALSE'; 
	  echo "Yes OR No returns $result<br>"; 
	
	$result = ($yes || $yes) ? 'TRUE' : 'FALSE'; 
	  echo "Yes OR Yes returns $result<br>"; 
	  
	$result = (!$yes) ? 'TRUE' : 'FALSE'; 
	  echo "NOT Yes returns $result<br>"; 


?> 