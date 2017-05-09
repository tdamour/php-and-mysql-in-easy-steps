<?php 
// create and intialize global variable 
$number = 5; 

// function with one argument to utilize its value in calcution 
// and to output its result
function square($number)
{
	$result = $number * $number; 
	echo "$number Squared = $result<br>"; 
}

// same as squared() function except it's for cube
function cube($number)
{
	$result = $number * $number * $number; 
	echo "$number Cubed = $result<br>"; 
}

// add statements to call functions passing both literal and variable args.
square(3); 
cube(4);
square($number);
cube($number); 



?> 