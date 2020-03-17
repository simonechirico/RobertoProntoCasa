<html>
<head>
<?php
	@include("header.php");
	@include("sidebar-left.php");
?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stile.css?ts=<?=time()?>&quot">
</head>
<body>
	<div id="defaultOpen" class="tabcontent">
	<div class="margin">
		<h2>Elenco Categorie</h2>
		<?php
			// CONNESSIONE AL DATABASE
			$conn=mysql_connect("localhost","simonechirico","");
			$db=mysql_select_db("my_simonechirico",$conn);
						
			$risultato=mysql_query("SELECT*FROM categorie ORDER BY id_categoria, nome_categoria",$conn);
			echo"<table width='100%' align='center' style='font-size: 16px;'><tr><td width='30%'><b>MODIFICA</b></td><td width='70%'><b>NOME CATEGORIA</b></td></tr>";
			while($riga=mysql_fetch_array($risultato)){
				$idcategoria=$riga['id_categoria'];
				$nomecategoria=$riga['nome_categoria'];
							
				echo"<tr><td width='30%'><a href='modifica-categoria.php?getidcategoria=$idcategoria'>$idcategoria</a></td><td width='70%'>$nomecategoria</td></tr>";
			}
			echo"</table>";
		?>
		<br>
		<a href="form-categoria.php" class="button green">INSERISCI CATEGORIA</a>
	</div>
	</div>
</body>
</html>