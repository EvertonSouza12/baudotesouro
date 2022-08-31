<html>
	<body>
		<?php
			session_start("login");
			$login = $_POST["login"];
			$senha = $_POST["senha"];
			
			$conexao = mysql_connect("127.0.0.1","root","");
			
			
			mysql_select_db("cadastro")
			or die(mysql_error());
			
			$comando = mysql_query("SELECT * FROM
			`usuarios` WHERE `login` = '" . $login . "' AND `senha` = '" . $senha . "'; ") or die(mysql_error ());
			if($linha = mysql_fetch_array($comando))
			{
				$_SESSION["login"] = $login["login"];
				header("location:logado.php");
			}
			else
			{
			header("location:error.php");
			}
			
			mysql_close($conexao);
		?>
	</body>
</html>