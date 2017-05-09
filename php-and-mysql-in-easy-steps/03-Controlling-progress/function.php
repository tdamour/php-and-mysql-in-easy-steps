<?php 
 // create and intialize global variable 
 $result  = 5 + 5; 
 
 // function to create and initialize a local variable of same name 
 // and to output  it's value 
 function square()
 {
	 $result = 5 * 5; 
	 echo "Local Square Result = $result <br>"; 
 }
 
 // function to create and initialize a local variable of the same name again
 // and to output it's value 
 function cube()
 {
	 $result = 5 * 5 * 5; 
	 echo "Local Cube Result = $result<br>"; 
 }
 
 // add statements to output the value of the global variable 
 // and call both custom functions 
 echo "Global Sum Result = $result<br>"; 
 square(); 
 cube(); 




?>