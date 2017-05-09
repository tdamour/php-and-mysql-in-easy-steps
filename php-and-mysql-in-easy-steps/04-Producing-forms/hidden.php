<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
  // define timezone and initialize two variables 
  date_default_timezone_set('UTC'); 
  $time = date('H:i, F j'); 
  $user = 'Tim'; 
  
  // statment that writes a complete form containing a regular input field
  // and two hidden fields whose values are set by the variables 
  echo ' 
  <form action="hidden_handler.php" method="POST">
  <fieldset>
    <legend>Send us your comments</legend>
	<textarea rows="5" cols="20" name="comment">
	</textarea> 
	<input type="hidden" name="user" value="'.$user.'">
	<input type="hidden" name="time" value="'.$time.'">
  </fieldset>
  <p><input type="submit"> </p> 
  </form>';
?>
</body>
</html> 