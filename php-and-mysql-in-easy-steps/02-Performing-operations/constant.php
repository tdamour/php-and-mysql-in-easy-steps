<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Constant PHP</title>
</head>
<body>
<?php
  // create and intialize constant 
  define('USER','Tim'); 
  
  // insert statement to display the constant value in a concatenated string
  echo '<p>Hello'.USER.'</p>'; 
  
  // insert a statement to display the predefined constant value of the PHP version in a concatenated string
  echo '<p>You are using PHP version'.PHP_VERSION; 
  
  // insert a statement to display the predefined constant value of the host operating system in a string
  echo'running on '.PHP_OS.'</p>'; 
  
  
?>
</body> 
</html>