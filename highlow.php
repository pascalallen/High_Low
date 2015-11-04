<?php
$random = mt_rand(1, 100);
fwrite(STDOUT, 'Guess? ');
$counter = 0;
do {
	$guess = trim(fgets(STDIN));
	$counter++;
	if (!is_numeric($guess)){
		fwrite(STDOUT, 'Not a number' . PHP_EOL);
		fwrite(STDOUT, 'Guess? ');
	} else if($guess == $random){
		fwrite(STDOUT, 'Good guess! Guesses: ' . $counter . PHP_EOL);
	} else if ($guess < $random){
		fwrite(STDOUT, 'HIGHER' . PHP_EOL);
		fwrite(STDOUT, 'Guess? ');
	} else if($guess > $random){
		fwrite(STDOUT, 'LOWER' . PHP_EOL);
		fwrite(STDOUT, 'Guess? ');
	}
} while ($guess != $random);
?>