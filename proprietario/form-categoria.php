<html>
<head>
<?php
	@include("header.php");
	@include("sidebar-left.php");
?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stile.css?ts=<?=time()?>&quot">
</head>
	<?php
		$nomecategoria=$_GET['getnomecategoria'];
	?>
<body>
	<div id="Categorie" class="tabcontent">
		<div class="margin">
		<form name="modulo" method="post" action="inserisci-categoria.php">
			Nome categoria:<input type="text" name="nomecategoria" value="<?php echo $nomecategoria; ?>" autofocus required style="margin-left:20px;"><br>
			<br>
			<input type="submit" value="INVIA" name="invia" class="button green">
			<a href="elenco-categorie.php" class="button red">INDIETRO</a>
		</form>
		</div>
	</div>
</body>
</html>