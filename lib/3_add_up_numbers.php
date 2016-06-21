<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  // Your code goes here.
	$x = 0;
	foreach($arr as $number){
		$x+=$number;
	}
	return $x;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
$test = array(1,2,3,4,5,6,7,8,9,10);
echo addUpNumbers($test);
?>
