<html>
	<head>
		<title>Bibioteca</title>
	</head>
	<body>
	<a href="area.php">Area</a>
	<a href="index.php">Home</a>
	<a href="principal.php">Principal</a>
			<p>Grande Area</p>
			<select>
			
		</select>
		<p>Area</p>
			<select>
			
		</select>
			<p>Categoria</p>
			<select>
				<option>Selecione:</option>
			<?php
				$conexao=mysql_connect("127.0.0.1","root","");
				mysql_select_db("biblioteca2") or die(mysql_error());
				$comando=mysql_query("SELECT * FROM `area`;")or die(mysql_error());
				while($linha=mysql_fetch_array($comando))
				{
				echo"<option>".$linha["grandeArea"]."</option>";
				}
				mysql_close($conexao);
			?>
		</select>
	</body>
</html>