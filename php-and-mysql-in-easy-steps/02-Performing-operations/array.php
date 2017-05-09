<?php 
  # Statements here 
  // creation and intialize the variable array with values 
  $days = array('Monday','Tuesday','Wednesday'); 
  
  // foreach to display the value in array elements as a bulleted list
  foreach($days as $value){echo "&bull; $value";}
  
  // creation & initialize a variable array with both keys and values 
  $months = array('jan' => 'January', 'feb' => 'February','mar'=>'March'); 
  
  // output 
  echo '<dl>'; 
  foreach($months as $key => $value)
  {
	  echo "<dt>$key<dd>$value";
  }
  echo '</dl>'; 
  
  

?>