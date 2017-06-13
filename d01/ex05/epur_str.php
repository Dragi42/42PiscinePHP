#!/usr/bin/php
<?php

$i = 0;
function ft_split($str)
{
	$str = trim(preg_replace('/\s\s+/', ' ', $str));
	$str = explode(' ', $str);
	return $str;
}

$str = ft_split($argv[1]);

while ($str[$i])
{
	if ($str[$i + 1])
		echo($str[$i++]." ");
	else
		echo($str[$i++]."\n");
}

?>
