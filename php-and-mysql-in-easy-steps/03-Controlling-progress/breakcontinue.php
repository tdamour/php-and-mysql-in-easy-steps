<?php
 // for loop that performs three iterations
 for($i=1;$i<4;$i++)
 {
	 # Nested loop to be inserted here 
	 // performs three iterations 
	 for($j=1;$j<4;$j++)
	 {
		 // if and continue statement to skip first iteration of a loop
		 // when a specified condition is met.
		 if($i==1 && $j==1)
		 {
			 echo "Continues inner loop when i=$i and j=$j<br>"; 
			 continue; 
		 }
		 // if and break to break out of the inner loop 
		 if($i==2 && $j==1)
		 {
			 echo "Breaks inner loop when i=$i and j=$j<br>"; 
			 break; 
		 }
		echo "Running i=$i and j=$j<br>"; 
	 }
 }





?> 