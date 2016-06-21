<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
	$fil = array();
	foreach($arr as $number){
		if($number<10){
			array_push($fil, $number);
		}
		else{
		}
	}
	return $fil;
}

$test = array(2,5,55,33,9,10,11,12,-3);
$test = filterNumbers($test);
foreach($test as $x){
	echo $x;
}

?>