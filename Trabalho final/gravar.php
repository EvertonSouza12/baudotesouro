<html>
	<body>
		<?php
			$grande = $_POST["grande"];
			$conexao = mysql_connect("127.0.0.1","root","");
			mysql_select_db("biblioteca2") or die(mysql_error() );
			$comando = mysql_query("INSERT INTO `grandearea`(`grandeArea`) VALUES ('$grande')") or die(mysql_error ());
			mysql_close($conexao);
			header("Location:gravar1.php");
		?>
	</body>
</html>