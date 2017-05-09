<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Ticks-Archives</title> 
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link rel="stylesheet" type="text/css" href="css/main.css"> 
<link rel="shortcut icon" href="images/animated_favicon1.gif"/> 
</head>

<body>

<form action="secure.php" method="POST"> 
  <p>New Name : <input type="text" name="name">
  <input type="Submit" value="submit"></p>
  
  <?php 
		require('../connect_db.php'); 
		
		# Validation statements here 
		# statements to validate the user has been submitted a valid string
		# then update the existing table record 
		if(!empty($_POST['name']) && !is_numeric($_POST['name']))
		{
			$name = $_POST['name']; 
			# Security statments 
			$name = mysqli_real_escape_string($dbc,$name); 
			$name = strip_tags($name); 
			
			$q = 'UPDATE towels SET name ="'.$name.'"WHERE id=1'; 
			mysqli_query($dbc,$q); 
		}
		else
		{
			echo 'No valid new name submitted'; 
		}
		
		# displays item in an existing table
		$q = 'SELECT * FROM towels WHERE id=1'; 
		$r = mysqli_query($dbc,$q); 
		
		while($row=mysqli_fetch_array($r,MYSQLI_NUM))
		{
			echo "<p>Name : $row[1]</p>"; 
		}
		mysqli_close($dbc); 
  
  ?>
</form>

</body>

</html>