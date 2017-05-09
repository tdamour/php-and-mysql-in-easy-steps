<?php
	# Statements starts here... 
	
	// two variable declare as array 
	$letters = array('A','B','C'); 
	$numbers = array(1,2,3); 
	
	// two dimensional arrays with key names 
	$matrix = ('Letter'=>$letters, 'Number'=>$numbers); 

	// statment to display a single store value
	echo "<p>Start : {$matrix['Letter'][0]} </p>";

	// display key and value in all elements as two unordered lists
	foreach($matrix as $array => $list)
	{
		echo '<ul>'; 
		foreach($list as $key => $value)
		{
			echo "<li>$array[$key] = $value"; 
		}
		echo '</ul>'; 
	}

?> 