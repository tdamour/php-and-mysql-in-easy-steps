<?php

// create & intialize two variables one with a integer the other 
// with a character value

$number = 2; $letter = 'B'; 

// switch statement to match the integer value
switch($number)
{
	case 1: echo 'Number is One<br>'; break; 
	case 2: echo 'Number is Two<br>'; break; 
	case 3: echo 'Number is Three<br>'; break; 
	default: echo'Number is unrecongized<br>'; 
}

// switch statement to match character value
switch($letter)
{
	case'A': echo 'Letter is A<br>'; break;
	case'B': echo 'Letter is B<br>'; break;
	case'C': echo 'Letter is C<br>'; break;
	default: echo 'Letter is unrecongized<br>'; 
}

// switch statement to attempt to match against multiple integer values 
switch($number)
{
	case 0: case 1: case 2: echo 'Less than 3<br>'; break; 
	default: echo'3 or more, or less than zero'; 
}


?> 