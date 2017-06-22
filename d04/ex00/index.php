<?php
    session_start();
    if ($_GET["submit"] === "OK")
    {
        if (($_GET["login"]) !== NULL)
            $_SESSION["login"] = $_GET["login"];
        if (($_GET["passwd"]) !== NULL)
            $_SESSION["passwd"] = $_GET["passwd"];
    }
?>
<html>
    <head>
        <style>
        body {
            font-family: sans-serif;
            font-size: 20px;
        }
        input {
            width: 30%;
            border-radius: 10px;
            height: 50px;
            font-size: 15px;
        }
        </style>
    </head>

    <body><center>
        <form action="index.php" method="get">
            Identifiant: <input type="text" name="login" value="<?php echo $_GET["login"];?>" placeholder="login ..."/>
            Mot de passe: <input type="password" name="passwd" value="<?php echo $_GET["passwd"];?>" placeholder="password"/>
                <br>
            <input type="submit" value="OK"/>
        </form>
    </center></body>
</html>
