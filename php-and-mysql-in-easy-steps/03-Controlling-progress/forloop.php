<?php
  // for loop to output the loop counter value in a list on each of 
  // three iterations
  for($i=1;$i<4;$i++)
  {
	  echo "<dt>Outer loop iteration $i"; 
	  
	  # Nested loop to be inserted here. 
	  for($j=1;$j<4;$j++)
	  {
		  echo "<dd>Inner loop iteration $j"; 
	  }
  }


?> 