<html>
	<body>
		<?php
			$login = $_POST["login"];
			$senha = $_POST["senha"];
			$conexao = mysql_connect("127.0.0.1","root","");
			mysql_select_db("cadastro") or die(mysql_error() );
			$comando = mysql_query("INSERT INTO `usuarios`(`login`,`senha`) VALUES ('$login', '$senha')") or die(mysql_error ());
			mysql_close($conexao);
			header("Location:index.php");
		?>
	</body>
</html>