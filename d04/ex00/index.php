<?php

	if (!$_SESSION[activated]) {
		session_start();
		$_SESSION[activated] = 1;
	}
	if ($_GET[login] != NULL && $_GET[passwd] != NULL && $_GET[submit] == OK) {
		$_SESSION[login] = $_GET[login];
		$_SESSION[passwd] = $_GET[passwd];
	}

?>

<html>
	<head>
		<title>Session</title>
		<style>
			.container {
				display: flex;
				flex-direction: column;
				background: lightgrey;
				border: 2px solid black;
				border-radius: 20px;
				width: 40%;
				margin: auto;
				margin-top: 50px;
				text-align: center;
			}
			.input {
				margin: 0 20 10 20;
				background: pink;
				border: 2px solid black;
				border-radius: 20px;
			}
			.btn {
				margin: auto;
				margin-bottom: 15px;
				background: lightblue;
				width: 50%;
				border: 2px solid black;
				border-radius: 20px;
			}
		</style>
	</head>
	<body>
		<form class="container" method="GET">
			<label>Login</label>
			<input class="input" type="text" name="login" value="<?php echo $_SESSION[login];?>">
			<label>Password</label>
			<input class="input" type="password" name="passwd" value="<?php echo $_SESSION[passwd];?>">
			<button class="btn" name="submit" value="OK">Submit</button>
		</form>
	</body>
</html>
