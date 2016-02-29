<?php




// Write the output
// Notice the space after the ?
do {
$correct = rand(1, 100);
fwrite(STDOUT, 'I want you to guess a number between 1 and 100? ');
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
