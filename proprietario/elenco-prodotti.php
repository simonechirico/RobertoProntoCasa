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
	<h2>Elenco Prodotti</h2>
	<?php
		// CONNESSIONE AL DATABASE
		$conn=mysql_connect("localhost","simonechirico","");
		$db=mysql_select_db("my_simonechirico",$conn);
				
		$risultato=mysql_query("SELECT*FROM prodotti ORDER BY nome_prodotto",$conn);
		echo"<table width='100%' align='center' style='font-size: 14px;'><tr><td><b>MODIFICA</b></td><td><b>NOME</b></td><td width='40%' align='center'><b>DESCRIZIONE</b></td><td><b>PREZZO</b></td><td><b>COD. CATEGORIA</b></td></tr>";
		while($riga=mysql_fetch_array($risultato)){
			$idprodotto=$riga['id_prodotto'];
			$nomeprodotto=$riga['nome_prodotto'];
			$descrprodotto=$riga['descr_prodotto'];
			$prezzoprodotto=$riga['prezzo_prodotto'];
			$codcategoria=$riga['cod_categoria'];
			
			echo"<tr><td width='5%' align='center'><a href='modifica-prodotto.php?getidprodotto=$idprodotto'>$idprodotto</a></td><td width='30%' align='center'>$nomeprodotto</td><td width='40%' align='center'>$descrprodotto</td><td width='20%' align='center'>$prezzoprodotto</td><td width='5%' align='center'>$codcategoria</td></tr>";
		}
		echo"</table>";
	?>
	<br>
	<a href="form-prodotto.php" class="button green">INSERISCI PRODOTTO</a>
</div>
</div>
</body>
</html>