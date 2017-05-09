<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
  <?php
    
	/* initialize variable with a submitted value or with NULL
	   if no value has been submitted */ 
	if(isset($_POST['definition']))
	{
		$definition = $_POST['definition']; 
	}
	else{
		$definition = NULL; 
	}
	
	# Response statments to be inserted here. 
	
	// insert statement to output an appropriate response 
	// according to the value of the varible 
	if($definition != NULL)
	{
		if($definition != 'Scripting')
		{
			echo "$definition is Incorrect"; 
		}
		else{
			echo "$definition is Correct"; 
		}
	}
	else{
		echo 'You must select one answer'; 
	}
  
  ?>
</body>
</html>