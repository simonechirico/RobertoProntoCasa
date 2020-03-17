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
<div id="Categorie" class="tabcontent">
<div class="margin">
  <h2>Modifica Categoria</h2>
  <?php
		// CONNESSIONE AL DATABASE
		$conn=mysql_connect("localhost","simonechirico","");
		$db=mysql_select_db("my_simonechirico",$conn);
			
		$idcategoria=$_GET['getidcategoria'];
			
		$risultato=mysql_query("SELECT*FROM categorie WHERE id_categoria='$idcategoria'",$conn);
		$riga=mysql_fetch_array($risultato);
		$nomecategoria=$riga['nome_categoria'];
	?>
		<form name="modulo" method="post" action="salva-categoria.php?getidcategoria=<?php echo $idcategoria;?>">
			Nome categoria:<input type="text" name="nomecategoria" value="<?php echo $nomecategoria;?>" autofocus required style="margin-bottom:10px; margin-left:40px;"><br>
			<br>
			<input type="submit" value="SALVA" name="salva" class="button green">
			<a href="elimina-categoria.php?getidcategoria=<?php echo $idcategoria; ?>" class="button red" onclick="return confirm('Sei sicuro?')">ELIMINA</a>
		</form>
	</div>
</div>
</body>
</html>