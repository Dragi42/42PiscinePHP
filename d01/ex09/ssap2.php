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

sort($tab, SORT_NATURAL | SORT_FLAG_CASE);
$last = $i;
$i = 0;
$reset = 0;

while ($i <= $last && $reset <= 2)
{
	if ($i <= $last && $reset == 0 && ctype_alpha($tab[$i][0]))
		echo($tab[$i]."\n");
	if ($i <= $last && $reset == 1 && ctype_digit($tab[$i][0]))
		echo($tab[$i]."\n");
	if ($i <= $last && $reset == 2 && !ctype_digit($tab[$i][0]) &&
			!ctype_alpha($tab[$i][0]) && ctype_print($tab[$i][0]))
		echo($tab[$i]."\n");
	else if ($reset < 2 && $i == $last)
	{
		$reset++;
		sort($tab, SORT_STRING);
		$i = 0;
	}
	$i++;
}

?>
