<html>
	<head>
		<title>Bibioteca</title>
	</head>
	<a href="area.php">Area</a>
	<a href="categoria.php">Categoria</a>
	<a href="principal.php">Principal</a>
	<a href="gravar1.php">Cadastrar Grande Area</a>
	<a href="gravararea.php">Cadastrar Area</a>
	<body>
			<p>Grande Area</p>
			<select>
					<option>Selecione:</option>
			<?php
				$conexao=mysql_connect("127.0.0.1","root","");
				mysql_select_db("biblioteca2") or die(mysql_error());
				$comando=mysql_query("SELECT * FROM `grandearea`;")or die(mysql_error());
				while($linha=mysql_fetch_array($comando))
				{
				echo"<option>".$linha["grandeArea"]."</option>";
				}
				mysql_close($conexao);
			?>
		</select>
		<p>Area</p>
			<select>
					<option></option>
					<option></option>
					<option></option>
		</select>
			<p>Categoria</p>
			<select>
					<option></option>
					<option></option>
					<option></option>
		</select>
	</body>
</html>