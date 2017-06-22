<?php

	$login = $_POST[login];
	$oldpw = hash('whirlpool', $_POST[oldpw]);
	$newpw = hash('whirlpool', $_POST[newpw]);
	$file = "../private/passwd";

	if (!$login || !$newpw || !$oldpw || $_POST[submit] != "OK")
		echo "ERROR\n";
	else {
		$current = unserialize(file_get_contents($file));
		if ($current) {
			foreach ($current as $user => $value) {
				if ($value['login'] == $login && $newpw != $oldpw && $oldpw == $value['passwd']) {
					$current[$user]['passwd'] = $newpw;
					$exist = 1;
				}
			}
			file_put_contents($file, serialize($current));
			if (!$exist)
				echo "ERROR\n";
			else
				echo "OK\n";
		}
		else
			echo "ERROR\n";
	}

?>
