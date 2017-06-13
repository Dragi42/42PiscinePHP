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
	if ($i <= $last && $reset == 0 && ($tab[$i][0] >= 'a' && $tab[$i][0] <= 'z' ||
			$tab[$i][0] >= 'A' && $tab[$i][0] <= 'Z'))
		echo($tab[$i]."\n");
	else if ($i <= $last && $reset == 1 && ($tab[$i][0] >= "0" && $tab[$i][0] <= "9"))
		echo($tab[$i]."\n");
	else if ($reset == 2 && $i <= $last && ((ord($tab[$i]) < 48 && ord($tab[$i]) >= 0) || (ord($tab[$i]) > 57 &&
		ord($tab[$i]) < 65) || (ord($tab[$i]) > 90 && ord($tab[$i]) < 97) || (ord($tab[$i]) > 122 && ord($tab[$i]) <= 127)))
		echo($tab[$i]."\n");
	else if ($reset < 2 && $i == $last)
	{
		$reset++;
		if ($reset == 1)
			sort($tab, SORT_STRING);
		$i = 0;
	}
	$i++;
}

?>
