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
	<div id="Prodotti" class="tabcontent">
	<div class="margin">
		
	<?php
		$nomeprodotto=$_GET['getnomeprodotto'];
		$descrprodotto=$_GET['getdescrprodotto'];
		$prezzoprodotto=$_GET['getprezzoprodotto'];
		$codcategoria=$_GET['getcodcategoria'];
		
		// CONNESSIONE AL DATABASE
		$conn=mysql_connect("localhost","simonechirico","");
		$db=mysql_select_db("my_simonechirico",$conn);
	?>
	
		<form name="modulo" method="post" action="inserisci-prodotto.php" enctype="multipart/form-data">
			Nome prodotto:<input type="text" name="nomeprodotto" value="<?php echo $nomeprodotto; ?>" autofocus required style="margin-bottom:10px; margin-left:20px;"><br>
			Descrizione:<input type="text" name="descrprodotto" value="<?php echo $descrprodotto; ?>" required style="margin-top:10px; margin-bottom:10px; margin-left:20px;"><br>
			Prezzo:<input type="text" name="prezzoprodotto" value="<?php echo $prezzoprodotto; ?>" required style="margin-top:10px; margin-bottom:10px; margin-left:20px;"><br>
			Categoria:<select name="codcategoria" required style="margin-top:10px; margin-bottom:10px; margin-left:20px;"><br>
				<option value="">
				<?php
					$risultato=mysql_query("SELECT*FROM categorie ORDER BY nome_categoria", $conn);
					while ($riga=mysql_fetch_array($risultato)){
						$nc=$riga['nome_categoria'];
						echo"<option value='$nc'>".$riga['nome_categoria'];
					}
				?>
				</select>
			<br>
			Foto:<input type="file" name="imgprodotti" size="20" id="photo" style="margin-top:10px; margin-bottom:10px; margin-left:20px;"><img src="" width="50" id="img">
			<br><br>
			<input type="submit" value="INVIA" name="invia" class="button green">
			<a href="elenco-prodotti.php" class="button red">INDIETRO</a>
		</form>
	</div>
	</div>
</body>
</html>