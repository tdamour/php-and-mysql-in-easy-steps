<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
  // variable quantity initialized with a submitted value or with NULL 
  // if no value has been submitted 
  if(!empty($_POST['quantity']))
  {
	  $quantity = $_POST['quantity'];
	  
	  # Format validation to be inserted here. 
	  if(!is_numeric($quantity))
	  {
		  $quantity = NULL; echo 'Quantity must be numeric<br>'; 
	  }
  }
  else{
	    $quantity = NULL; echo 'Quantity must be numberic<br>';
  }
  
  // intialize another variable (email) with a submitted value or 
  // with NULL if no value is submitted 
  if(!empty($_POST['email']))
  {
	  $email = $_POST['email']; 
	  #Format validation 
	  $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}.\b/'; 
	  if(!preg_match($pattern,$email))
	  {
		  $email=NULL; echo 'Email address is incorrect format'; 
	  }
  }
  else{
	  $email = NULL; echo 'You must enter an email address'; 
  }
  
  // statement to output valid submitted data
  if(($quantity != NULL) && ($email != NULL))
  {
	  echo "Email : $email<br>Quantity : $quantity"; 
  }
  
  

?>

</body>
</html> 