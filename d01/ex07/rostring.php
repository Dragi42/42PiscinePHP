#!/usr/bin/php
<?php

function ft_split($str)
{
	$str = trim(preg_replace('/\s\s+/', ' ', $str));
	$str = explode(' ', $str);
	return $str;
}

$str = ft_split($argv[1]);
$i = 0;

while ($str[$i])
{
	if ($str[$i + 1])
		echo($str[++$i]." ");
	else
		break;
}
if ($i <= 2)
	echo($str[0]."\n");
else
	echo($str[$i]." ".$str[0]."\n");

?>
