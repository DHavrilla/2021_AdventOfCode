<?php

$strInput = strval(readInput());

$exInput = explode(PHP_EOL.PHP_EOL, $strInput);

echoInformation($exInput);

$callNumbers = array();

$callNumbers = array_shift($exInput);

$bingoCards = array();

$bingoCards = $exInput;

echo $bingoCards[0] . "\n";

$exCards = explodeCards($bingoCards);

echo $exCards[0];

function explodeCards($input)
{
	foreach($input as $key) {
		explode (" ", $key);
	}
	return $key;
}

function getBingoCards($input)
{
	$setCards = array();
	foreach($input as $key) {
		$setCards[] = $key;
	}
	echo $setCards[1] . "\n";
}

function echoInformation($input)
{
	for($i=0;$i<count($input);$i++) {
		//echo $input[$i] . "\n\n";
		explode(" ", $input[$i]);
	}
}

function readInput()
{
	$myfile = fopen("day4_input.txt", "r") or die("Unable to open file!");
	$input = fread($myfile,filesize("day4_input.txt"));
	fclose($myfile);
	return $input;
}


?>