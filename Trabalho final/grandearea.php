<html>
<head>
<title>Grande Área</title>
<body><!-- background=".jpg" text=black>-->
<form action=procG.php method=post>
<center><font size="7">Grande Área</font></center>
<center>
<div>
<hr>
<br>
<font size="5">Nome da Grande Área : 
<select>
<option>Selecione:</option>
<?php
		$conexao=mysql_connect("127.0.0.1","root","");
		mysql_select_db("biblioteca") or die(mysql_error());
		$comando=mysql_query("SELECT * FROM `grandearea`;")or die(mysql_error());
		while($linha=mysql_fetch_array($comando))
		{
			echo"<option>".$linha["grandeArea"]."</option>";
		}
		mysql_close($conexao);
	?>
</select>
<input type=submit value='Cadastrar'>
<hr></div>
<a href="index.php" title="Voltar para home"><font  size="5"> Voltar para home</font></a>
<a href="area.php" title="Registrar na área"><font  size="5"> Registrar na área</font></a>
<a href="categoria.php" title="Registrar na categoria"><font size="5">Registrar na categoria</font></a>
<a href="usuario.php"><font size="5"> Registrar no usuario</font></a>
</body>
</head>
</html>