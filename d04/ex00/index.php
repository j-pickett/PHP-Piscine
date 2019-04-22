<?php
session_start();
/* if submit is ok status, get login and password */
if ($_GET["submit"] == "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<html>    <style>
    input {
        background-color:rgb(255, 255, 0);
        }
    body {
        background-color:rgb(64, 224, 208);
        }
    </style><body>
    <form action="index.php" method="GET">
		Username: <input type="text" name="login" value="<?php if ($_SESSION["login"]){ echo $_SESSION["login"];} ?>" />
		<br/>
		Password: <input type="password" name="passwd" value="<?php if ($_SESSION["passwd"]){ echo $_SESSION["passwd"];} ?>" />
		<br/>
		<input type="submit" name="submit" value="OK">
	</form>
</body></html>