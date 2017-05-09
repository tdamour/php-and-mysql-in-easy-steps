<?php 
  // statement that outputs a result only when a tested expression 
  // is found to be true. 
  
  if(4>2){echo'<p>Yes, 4 is greater than 2<br>';}
  
  // statment that outputs a result only when two tested expressions 
  // are both found to be TRUE 
  
  if((4>2) && (8>4))
  {
	  echo '4 is greater than 2 AND 8 is greater than 4<br>'; 
  }
  
  // statment that outputs a result when a tested expression is found
  // to be TRUE or FALSE 
  
  if(4 > 8)
  {
	  echo '4 is greater than 8<br>'; 
  }
  else
  {
	  echo '4 is less than 8<br>'; 
  }
  
  // statment that outputs a result when either of two tested expressions
  // are found to be TRUE or when both tested expressions are found to be
  // FALSE
  
  if(4>8)
  {
	  echo'This test is True</p>'; 
  }
  elseif(8>4)
  {
	  echo'Alternative test is True</p>'; 
  }
  else{
	  echo'Both tests are False</p>'; 
  }
  



?>