<?php
//*************** GUESS A NUMBER GAME **********************
//game picks random number 1-100
//prompts user for guess
//if user guess is less than the number, it outputs "higher"
//If user guess is more than the number, it outputs "lower"
//If a user guesses the number, the game should declare "Good Guess!"
//**********************************************************

//game picks random number 1-100
$random = rand(1, 100);

//add argument exercises
if ($argc == 1){
	do {
		//prompts user for guess
		$guess = fwrite(STDOUT, "Guess a number between 1 and 100. ");
		$userInput = trim(fgets(STDIN));
		if ($userInput > 0 && $userInput < 101){
			if (!is_numeric($userInput)) {
				fwrite(STD, "Guess a number between 1 and 100. ");
			} elseif ($userInput == $random){
				//If a user guesses the number, the game should declare "Good Guess!"
				fwrite(STDOUT, "Good Guess! " . PHP_EOL);
				exit(0);
			} elseif ($userInput != $number || $userInput < 0 || $userInput > 100){
				fwrite(STD, "Guess a number between 1 and 100. ");
			} elseif ($userInput > $random){
				//If user guess is more than the number, it outputs "lower"
				fwrite(STDOUT, "LOWER " . PHP_EOL);
			} elseif ($userInput < $random){
				//if user guess is less than the number, it outputs "higher"
				fwrite(STDOUT, "HIGHER " . PHP_EOL);
			} 
		} 
	} while ($userInput != $random);
}

if ($argc == 3){

	$random = rand($argv[1], $argv[2]);

	do {
		//prompts user for guess
		$guess = fwrite(STDOUT, "Guess a number between 1 and 100. ");
		$userInput = trim(fgets(STDIN));
		if ($userInput > 0 && $userInput < 101){
			if (!is_numeric($userInput)) {
				fwrite(STD, "Guess a number between 1 and 100. ");
			} elseif ($userInput == $random){
				//If a user guesses the number, the game should declare "Good Guess!"
				fwrite(STDOUT, "Good Guess! " . PHP_EOL);
				exit(0);
			} elseif ($userInput != $number || $userInput < 0 || $userInput > 100){
				fwrite(STD, "Guess a number between 1 and 100. ");
			} elseif ($userInput > $random){
				//If user guess is more than the number, it outputs "lower"
				fwrite(STDOUT, "LOWER " . PHP_EOL);
			} elseif ($userInput < $random){
				//if user guess is less than the number, it outputs "higher"
				fwrite(STDOUT, "HIGHER " . PHP_EOL);
			} 
		} 
	} while ($userInput != $random);
}



