<?php

if ($argc == 3) {
	$min = $argv[1];
	$max = $argv[2];
} else if ($argc == 2) {
	$min = $argv[1];
	$max = $argv[1] *2;
	echo"Your input was partially invalid, switsching 'max' to double the value of 'min'\n";
} else if ($argc == 1) {
	$min = 100;
	$max = 200;
	echo"Your input was invalid, switsching to default\n";
} else {
	$min = 100;
	$max = 200;
	echo"Your input was invalid, switching to default:\n";
	

}




// Write the output
// Notice the space after the ?
do {
$correct = mt_rand($min, $max);
fwrite(STDOUT, "I want you to guess a number between $min and $max? ");
do {	// Get the input from user
	$guess = fgets(STDIN);
	$guess = trim($guess);

	// Output the user's name
			if($guess != $correct && $guess < $correct) {
	  			fwrite(STDOUT, "Your number $guess is too low guess higher: ");


			}

			else if($guess != $correct && $guess > $correct) {
	  			fwrite(STDOUT, "Your number $guess is too high guess lower: ");

			} 

			// else fwrite(STDOUT, "Please enter valid number: ");


} while ($guess != $correct);

	if ($guess == $correct) {

		fwrite(STDOUT, "Your number $guess is corect. You have won! \n");
		// exit(0);

	}

fwrite(STDOUT, "Do you want to play again? Yes or No? ");
$answer = fgets(STDIN);
$answer = trim($answer);
} while ($answer == "Yes" || $answer == "yes");
	
	if ($answer == "No" || $answer == "no") {
		exit(0);
	
	} else {

		fwrite(STDOUT, "Not a valid answer. Please answer Yes or No! ");
	}
