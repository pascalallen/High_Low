<?php
if($argc != 3){
	die("Wrong number of arguments!" . PHP_EOL);	
}
$ranMin = $argv[1];
$ranMax = $argv[2];
$random = mt_rand($ranMin, $ranMax);
$counter = 0;
fwrite(STDOUT, 'Guess? ');
do {
	$guess = trim(fgets(STDIN));
	$counter++;
	if(!is_numeric($guess)){
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