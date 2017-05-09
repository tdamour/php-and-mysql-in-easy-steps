<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
  // page request method 
  if($_SERVER['REQUEST_METHOD'] != 'POST')
  {
	   # Form display statments 
	   // display form that has been requested by the GET Method 
	   echo '
	   <form action="single.php" method="POST">
	   <fieldset>
	     <legend>Send us your comments</legend>
		 <textarea rows="5" cols="40" name="comment">
		 </textarea>
	   </fieldset>
	     <p><input type="submit"></p>
	   </form>';
  }
  else
  {
	  # Form handling 
	  // handle form submission when page has been requested by POST Method
	  if(!empty($_POST['comment']))
	  {
		  $comment = $_POST['comment']; 
		  echo "Comment : $comment"; 
	  }
	  else
	  {
		$comment = NULL; echo "You must enter a comment";   
	  }
  }


?>

</body>
</html> 