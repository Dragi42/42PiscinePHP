<?php

function auth($login, $passwd)
{
	$modify = FALSE;
	$pw = hash("whirlpool", $passwd);
	$current = unserialize(file_get_contents("../private/passwd"));
	foreach($current as $user => $val)
	{
		if ($val['login'] == $login && $val['passwd'] == $pw)
			$modify = TRUE;
	}
	if ($modify == FALSE)
		return (FALSE);
	else
		return (TRUE);
}

?>
