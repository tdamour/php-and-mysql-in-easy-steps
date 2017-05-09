<?php
// set timezone and intialize a global variable with a username
 date_default_timezone_set('UTC'); 
 $user=' Tim'; 
 
 // function with no arguments to return the weekday, day with suffix
 // and month name when called
 function display_date()
 {
	 return date('l,jS F');
 }
 
 // function with one argument to return an appropriate user greeting
 // for the current time of day 
 function welcome($user)
 {
	 $hour = date('H'); 
	 $greeting = ($hour<12) ? 
	 '<br>Good Morning' : '<br>Good Day'; 
	 $greeting.=$user; 
	 return $greeting; 
 }
 
 echo display_date(); 
 echo welcome($user); 




?> 