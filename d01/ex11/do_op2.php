#!/usr/bin/php
<?php

if ($argc != 2)
	echo"Incorrect Parameters\n";

else {
	$argv[1] = trim($argv[1]);

	$i = 0;
	if ($argv[1][$i] == '+' || $argv[1][$i] == '-')
		$i++;
	if (!ctype_digit($argv[1][$i])) {
		echo"Syntax Error\n";
		exit;
	}

	$nb1 = floatval($argv[1]);

	$op = strspn($argv[1], $nb1);
	$argv[1] = trim(substr($argv[1], $op));

	$op = $argv[1][0];

	if ($op != '+' && $op != '-' && $op != '/' && $op != '*' && $op != '%') {
		echo"Syntax Error\n";
		exit;
	}

	$argv[1] = trim(substr($argv[1], 1));

	$i = 0;
	if ($argv[1][$i] == '+' || $argv[1][$i] == '-')
		$i++;
	if (!ctype_digit($argv[1][$i])) {
		echo"Syntax Error\n";
		exit;
	}

	$nb2 = floatval($argv[1]);

	$rest = strspn($argv[1], $nb2);
	$argv[1] = trim(substr($argv[1], $rest));

	if ($argv[1]) {
		echo"Syntax Error\n";
		exit;
	}

	if ($op == '+')
		echo($nb1 + $nb2);
	else if ($op == '-')
		echo($nb1 - $nb2);
	else if ($op == '*')
		echo($nb1 * $nb2);
	else if ($op == '/')
		echo($nb1 / $nb2);
	else if ($op == '%')
		echo($nb1 % $nb2);
	echo "\n";
}

?>
