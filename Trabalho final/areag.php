<html>
	<body>
		<?php
			$grande = ["grande"];
			$area = $_POST["area"];
			$conexao = mysql_connect("127.0.0.1","root","");
			mysql_select_db("biblioteca2") or die(mysql_error() );
			$comando = mysql_query("INSERT INTO `area`(`area`,`grandeArea`) VALUES ('$grande','$area')") or die(mysql_error ());
			mysql_close($conexao);
			//header("Location:gravararea.php");
		?>
	</body>
</html>