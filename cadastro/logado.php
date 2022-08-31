<html>
	<head>
		<title>Logado</title>
	</head>
	<body>
		<?php
			session_start("login");
			if($_SESSION["login"] == "")
			{
				header("location:index.php");
			}
			else
			{
				echo "Seja bem vindo: " . $_SESSION["login"];
			}
		?>
	</body>
</html>