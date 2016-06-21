<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  return strtoupper($str);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
if(ctype_upper(uppercasesAllLetters("alllower"))){
	echo "Success!";
}
else{
	echo "Failure!";
}

if(ctype_upper(uppercasesAllLetters("ALLUPPER"))){
	echo "Success!";
}
else{
	echo "Failure!";
}

if(ctype_upper(uppercasesAllLetters("MixEdCAse"))){
	echo "Success!";
}
else{
	echo "Failure!";
}

?>
