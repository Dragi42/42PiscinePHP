<?php

	$login = $_POST[login];
	$passwd = $_POST[passwd];
	$file = "../private/passwd";

	if (!$login || !$passwd || $_POST[submit] != "OK")
		echo "ERROR\n";
	else {
		if (!file_exists("../private"))
			mkdir("../private");
		if (!file_exists($file))
			$current = file_put_contents($file, NULL);
		$current = unserialize(file_get_contents($file));
		if ($current) {
			foreach ($current as $user => $val) {
				if ($val['login'] == $login) {
					$exist = 1;
					echo "ERROR\n";
				}
			}
		}
		if (!$exist) {
			$passwd = hash('whirlpool', $_POST[passwd]);
			$current[] = array('login' => $login, 'passwd' => $passwd);
			file_put_contents($file, serialize($current));
			echo "OK\n";
		}
	}

?>
