<?php
  // initialize variable with a submitted value or with NULL 
  // if no value has been submitted (this being comment)
  if(!empty($_POST['comment']))
  {
	  $comment=$_POST['comment']; 
  }
  else
  {
	$comment = NULL; 
	echo 'You must enter a comment'; 
  }
  
  // statements to initialize two variables if the hidden form field
  // values have been set 
  /* NOTE: ? is ternary that replaces the longer if..else statement */
  $time = (!isset($_POST['time'])) ? NULL : $_POST['time']; 
  $user = (!isset($_POST['user'])) ? NULL : $_POST['user']; 
  
  // statement that outputs valid submitted data 
  if(($comment != NULL) && ($time != NULL) && ($user != NULL))
  {
	  echo "<p>Comment received :\"$comment\"<br> from $user at $time</p>";
  }


?> 