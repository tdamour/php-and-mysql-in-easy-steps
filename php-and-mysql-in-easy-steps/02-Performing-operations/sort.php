<?php
	
	// Creating arrays and assigning keys names & values 
	$cars = array('Dodge' => 'Viper', 'Chevrolet' => 'Camaro','Ford'=>'Mustang');
	
	echo '<dl><dt>Original Element Order : <dd>'; 
	foreach($cars as $key => $value)
	{
		echo '&bull;', $key.' '.$value;
	}
	
	// asort() -- sorts by retaining original key 
	asort($cars); 
	echo '<dt>Sorted Into Value Order : <dd>'; 
	foreach($cars as $key => $value)
	{
		echo '&bull;', $key.' '.$value; 
	}
	
	// ksort() -- sorts by key
	ksort($cars);
	echo '<dt>Sorted Into Key Order : <dd>'; 
	foreach($cars as $key => $value)
	{
		echo '&bull;', $key.' '.$value; 
	}	
	

?> 