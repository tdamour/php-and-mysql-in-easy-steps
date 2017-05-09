<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title> 
</head>
<body>
<?php
  // statement that seeks an element named 'id' within the $_POST array
  if(isset($_POST['id']))
  {
	 $id = $_POST['id']; 
	 
	 // handler statement to store matched id value in a $_Session array
	 // element and relocate the browser - or display a message for any
	 // other id value 
	 if($id==123)
	 {
		session_start(); 
		$_SESSION['id'] = $id; 
		header('Location:location.php'); 
		exit();
	 }
	 else
	 {
		 echo "<p>$id is an incorrect ID! </p>"; 
	 }
  }
  
  
 
?>
</body>
</html> 