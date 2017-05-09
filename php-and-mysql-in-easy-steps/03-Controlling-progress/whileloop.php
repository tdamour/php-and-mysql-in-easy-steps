<?php
  // statement that creates an array 
  $numbers = array(10,20,30); 
  
  // add while loop to output value of each array element
  echo '<dt>While Loop :'; 
  
  $i=0; 
  
  while($i < 3)
  {
	  echo "<dd>Element $i = $numbers[$i]";
	  $i++; 
  }
  
  // do while loop to output the value of each array element
  echo '<dt>Do While Loop : ';
  $i=0; 
  do{
	  echo "<dd>Element $i = $numbers[$i]"
	  $i++;
  }
  while($i < 3); 
  
?> 