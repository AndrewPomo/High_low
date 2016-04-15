<?php 


// ask for difficulty
do  {
	// Ask for difficulty level
	fwrite(STDOUT, "On a scale of one to ten, how difficult do you want this game to be?\nUsing the number keys, enter your desired difficulty from 1-10.\n(Hint: Choose something below 4.)\n");

	// Get the user's desired difficulty level
	$difficulty = fgets(STDIN);
} while ($difficulty > 10 || $difficulty < 1);

$max = pow(100, $difficulty);
$number = mt_rand ( 1 , $max);

if ($difficulty == 10) {
	fwrite(STDOUT, "I hate you. Seriously. I don't have this kind of time, but i literally have no choice but to go through with this because I'm a freaking laptop. *sigh*....I'm thinking of a number between 1 and $max. What's your guess, jerk?\n");
	$guess = fgets(STDIN);
} elseif ($difficulty >= 6) {
	fwrite(STDOUT, "Well....this is going to take a while, but I can deal... I'm thinking of a number between 1 and $max. What's your first guess?\n");
	$guess = fgets(STDIN);
} elseif ($difficulty == 5) {
	fwrite(STDOUT, "You're looking for a challenge....I respect that! I'm thinking of a number between 1 and $max. What's your first guess?\n");
	$guess = fgets(STDIN);
} else {
	fwrite(STDOUT, "Keep it simple. Good choice. I'm thinking of a number between 1 and $max. What's your first guess?\n");
	$guess = fgets(STDIN);
}

$guessNum = 0;

while ($guess != $number){
	if ($guessNum == 50) {
		echo "50 guesses? YOU SUUUUUUUCK.\n";
	} elseif ($guessNum == 40) {
		echo "*yawn*\n";
	} elseif ($guessNum == 30) {
		echo "Is this really the best you can do?\n";
	} elseif ($guessNum == 20) {
		echo "Alright...let's wrap it up now.\n";
	} elseif ($guessNum == 10) {
		echo "You should almost be done!\n";
	}

	if ($guess > $number) {
		$guessNum++;
		fwrite(STDOUT, "Too high, dawg. Guess a lower number.");
		$guess = fgets(STDIN);
	} elseif ($guess < $number) {
		$guessNum++;
		fwrite(STDOUT, "Too low, dawg. Guess a higher number.");
		$guess = fgets(STDIN);
	}
}

if ($guess == 0) {
	echo "Giving up already? Fine by me, I guess. See ya.";
}

if ($guess = $number) {
	echo "Good job. See you later.\n";
}










