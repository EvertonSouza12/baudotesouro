<html>
	<body>
		<?php
			$ = $_POST[""];
			
			$conexao = mysql_connect("127.0.0.1","root","");
			
			
			mysql_select_db("biblioteca")
			or die(mysql_error());
			
			$comando = mysql_query("SELECT * FROM
			`grandearea` WHERE `grandeArea`") or die(mysql_error ());
			if($linha = mysql_fetch_array($comando))
			{
				header("");
			}
			else
			{
			header("location:error.php");
			}
			
			mysql_close($conexao);
		?>
	</body>
</html>