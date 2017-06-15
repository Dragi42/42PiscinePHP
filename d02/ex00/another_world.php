#!/usr/bin/php
<?php

	$argv[1] = trim(preg_replace('/\s\s+/', ' ', $argv[1]));
	if ($argc > 1) {echo $argv[1]."\n";}

?>
