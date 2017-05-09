<?php 
  # Statments here 
  
  // creation & intializtion of five variables 
  $zero=0; $nil=0; $one=1; $upr = 'A'; $lwr='a'; 
  
  // statements to display equality comparisons 
  
  $result = ($zero == $nil) ? 'True' : 'False'; 
	echo "0==0 is $result<br>"; 

  $result = ($zero == $one) ? 'True' : 'False'; 
	echo "0==1 is $result<br>"; 
	
  $result = ($upr == $lwr) ? 'True' : 'False'; 
    echo "A==a is $result<br>"; 

  $result = ($upr != $lwr) ? 'True' : 'False'; 
    echo "A!=a is $result<br>"; 
	
	// insert statements to display greater comparisons
	
	$result = ($one > $nil) ? 'True' : 'False'; 
	  echo "1>0 is $result<br>"; 
	  
	 $result = ($zero >= $nil) ? 'True' : 'False'; 
	   echo "0 >= 0 is $result<br>"; 
	
	$result = ($one <= $nil) ? 'True' : 'False'; 
	  echo "1 <= 0 is $result<br>"; 

?>