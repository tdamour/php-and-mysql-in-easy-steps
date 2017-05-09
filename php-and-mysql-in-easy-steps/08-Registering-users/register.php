<?php 

# page title and page header 
$page_title = 'Register'; 
include('includes/header.html'); 

# conditional test that will only execute the statements it contains
# if the form has been submitted 
if($_SERVER['REQUEST_METHOD']=='POST')
{
	# insert statements to open the database connection and 
	# intialize an array for error messages
	require('../connect_db.php'); 
	$errors = array(); 
	
	# insert statements to store an error message if the first 
	# name field remains empty, or store its value in a variable
	if(empty($_POST['first_name']))
	{
		$errors[] = 'Enter your first name.'; 
	}
	else{
		$fn = mysqli_real_escape_string($dbc,trim($_POST['first_name']));
	}
	
	# Ditto for last_name & email 
	if(empty($_POST['last_name']))
	{
		$errors[] = 'Enter your last name.'; 
	}
	else{
		$ln = mysqli_real_escape_string($dbc,trim($_POST['last_name']));
	}
	
	if(empty($_POST['email']))
	{
		$errors[] = 'Enter your email address.'; 
	}
	else{
		$e = mysqli_real_escape_string($dbc,trim($_POST['email']));
	}
	
	# insert statements to store the password value in a variable 
	# if the password are a valid match, or store an error 
	# message if they do not match or the first field is empty 
	if(!empty($_POST['pass1']))
	{
		if($_POST['pass1'] != $_POST['pass2'])
		{
			$errors[] = 'Passwords do not match'; 
		}
		else
		{
			$p = mysqli_real_escape_string($dbc,trim($_POST['pass1']));
		}
	}
	else
	{
			$errors[] = 'Enter your password.';
	}
	
	# insert statements to store error message if the email
	# address is already registered in the 'users' database
	# table 
	if(empty($errors))
	{
		$q = "SELECT user_id FROM users WHERE email='$e'"; 
		$r = mysqli_query($dbc,$q);
		if(mysqli_num_rows($r)!= 0)
		{
			$errors[] = 'Email address already registered. <a href="login.php">Login</a>'; 
		}
	}
	
	# Insert statements to store user data in the database 
	# table, display a confirmation when registration succeeds 
	# close the database connections include page footer
	# and exit script
	if(empty($errors))
	{
		$q="INSERT INTO users(first_name,last_name,email,pass,reg_date) 
		VALUES('$fn','$ln','$e',SHA1('$p'), NOW() )"; 
		
		$r = mysqli_query($dbc,$q); 
		
		if($r)
		{
			echo '<h1>Registered!</h1>
				<p>You are now registered</p>
				<p><a href="login.php">Login</a></p>'; 
		}
		
		mysqli_close($dbc); 
		include('includes/footer.html'); 
		exit(); 
		
		# else : append alternative statments to display all 
		# stored error messages when registration cannot be 
		# completed and close the database connection 
	}else
	{
		echo '<h1>Error!</h1>
		<p id="err_msg">The following error(s) occured :<br>';
		foreach($errors as $msg)
		{
			echo "-$msg<br>"; 
		}
		echo 'Please try again</p>'; 
		mysqli_close($dbc); 
		
	}
}
?> 
<h1> Register </h1>
<form action="register.php" method="POST">
	<p>
	First Name : <input type="text" name="first_name"
	value="<?php if(isset($_POST['first_name']))
		echo $_POST['first_name'];?>">
	Last Name : <input type="text" name="last_name"
	value="<?php if(isset($_POST['last_name']))
		echo $_POST['last_name'];?>">
	</p>
	<p>
	Email Address : <input type="text" name="email"
	value="<?php if(isset($_POST['email']))
		echo $_POST['email']; ?>">
	</p>
	<p>
	Password : <input type="text" name="pass1"
	value="<?php if(isset($_POST['pass1']))
		echo $_POST['pass1'];?>">
	Confirm Password : <input type="text" name="pass2"
	value="<?php if(isset($_POST['pass2']))
		echo $_POST['pass2'];?>">
	</p>
	<p><input type="submit" value="Register"></p>
</form> 

<?php include('includes/footer.html');?> 