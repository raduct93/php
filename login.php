
<?php
	if (!empty($_POST["username"]) && !empty($_POST["password"])) {
		echo "ok<br>";
	}
	else
	{ ?>
		<form method=post>
			<input type=text name="username"/>
			<input type=text name="password"/>
			<input type=submit value="Login"/>
		</form>
	<?php }
?>

