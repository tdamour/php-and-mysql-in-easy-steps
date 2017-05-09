<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<!--- Sticky form with two text fields for name and email address details-->
  <form action="sticky.php" method="POST">
      <p>Name : 
	    <input type="text" name="name" value="<?php if(isset($_POST['name']))
			echo $_POST['name'];?>"></p>
	  <p>Email :
	    <input type="text" name="email" value="<?php if(isset($_POST['email']))
			echo $_POST['email'];?>"></p>
		
		<p> <input type="submit"></p> 
	
  </form>
  
  <!-- PHP script to handle form submission --> 
  <?php 
    
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		// array for errors
		$errors = array(); 
		
		// statements to initialze variables with submitted values 
		// or to add the errors arrays for omissions 
		if(empty($_POST['name'])) {$errors[] = 'name';}
		else{$name = trim($_POST['name']);}
		
		/* trim function remove any leading and trailing spaces from 
		   the submitted field value. */ 
		   
		if(empty($_POST['email'])){$errors[] = 'email';}
		else{$email = trim($_POST['email']);}
		
		// statements that write error messages or confirm successful 
		// form submission 
		if(!empty($errors))
		{
			echo 'Error! Please enter your '; 
		foreach($errors as $msg){echo " - $msg ";}
		}
		else
		{
		  echo "Success! Thanks $name "; 	
		}
		
	}
  
  ?> 

</body>
</html> 