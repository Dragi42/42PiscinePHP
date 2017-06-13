#!/usr/bin/php
<?php

function ft_split($str)
{
	$str = trim(preg_replace('/\s\s+/', ' ', $str));
	$str = explode(' ', $str);
	sort($str);
	return $str;
}

$i = 1;
$tab = array();
while ($argv[$i])
{
	$tab = array_merge($tab, ft_split($argv[$i]));
	$i++;
}
sort($tab);
$i = 0;
while ($tab[$i])
{
	echo($tab[$i]."\n");
	$i++;
}

?>
