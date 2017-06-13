#!/usr/bin/php
<?php
	while (1)
	{
		echo("Entrez un nombre: ");
		$prompt = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
		{
			echo(PHP_EOL);
			exit;
		}
		if (!is_numeric($prompt))
			echo("'".$prompt."' n'est pas un chiffre"."\n");
		else if ($prompt % 2 == 0)
			echo("Le chiffre ".$prompt." est Pair"."\n");
		else
			echo("Le chiffre ".$prompt." est Impair"."\n");
	}
?>
