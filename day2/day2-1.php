<?php
/*
written over to match part 2
needs to be modified to match part 1
*/

$route = strval(readInput());

$split = preg_split('/\s|\n/', $route);

echo calculateRoute($split);

function calculateRoute($input)
{
	$forward = 0;
	$vertical = 0;
	$aim = 0;

	for($i=0;$i<count($input);$i+=2){
		switch(true){
				case strstr($input[$i], "forward"):
						$forward = (int)$input[$i + 1] + $forward;
						$vertical = $vertical + (int)$input[$i + 1] * $aim; 
						break;
				case strstr($input[$i], "up"):
						$aim = $aim - (int)$input[$i + 1];
						break;
				case strstr($input[$i], "down"):
						$aim = $aim + (int)$input[$i + 1];
						break;
				default:
				exit();
		}
	}
	return "Forward: " . $forward . "\n" . "Vertical: " . $vertical . "\n" . "Total: " . $vertical * $forward . "\n";
}

function readInput()
{
	$myfile = fopen("day2_input.txt", "r") or die("Unable to open file!");
	$input = fread($myfile,filesize("day2_input.txt"));
	fclose($myfile);
	return $input;
}

?>
