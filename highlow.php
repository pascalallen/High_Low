<?php
$random = mt_rand(1, 100);
fwrite(STDOUT, 'Guess a number between 1 and 100:' . PHP_EOL);
do {
	$guess = intVal(fgets(STDIN));
	if ($guess < $random) {
		fwrite(STDOUT, 'HIGHER' . PHP_EOL);
	} else if ($guess > $random){
		fwrite(STDOUT, 'LOWER' . PHP_EOL);
	} else {
		fwrite(STDOUT, 'Lucky guess! You win!');
	}	
} while ($guess != $random);
?>