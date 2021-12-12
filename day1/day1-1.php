<?php

$list = strval(readInput());

$exList = explode(PHP_EOL, $list);

echo calculate($exList) . "\n";

function calculate($input)
{
	$sum = 0;
	for ($i = 0; $i<count($input) - 1; $i++) {
			if($input[$i+1] > $input[$i]){
					$sum++;
			}
	}
	return $sum;
}

function readInput()
{
	$myfile = fopen("day1_input.txt", "r") or die("Unable to open file!");
	$input = fread($myfile,filesize("day1_input.txt"));
	fclose($myfile);
	return $input;
}

?>
