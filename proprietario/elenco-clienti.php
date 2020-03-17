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
	<div id="Clienti" class="tabcontent">
	<div class="margin">
		<h2>Elenco Clienti</h2>
		<?php
			// CONNESSIONE AL DATABASE
			$conn=mysql_connect("localhost","simonechirico","");
			$db=mysql_select_db("my_simonechirico",$conn);
			
			$risultato=mysql_query("SELECT*FROM utenti ORDER BY cognome, nome",$conn);
			echo"<table width='80%'><tr><td width='40%'><b>COGNOME</b></td><td width='40%'><b>NOME</b></td></tr>";
			while($riga=mysql_fetch_array($risultato)){
				$idutente=$riga['id'];
				$nome=$riga['nome'];
				$cognome=$riga['cognome'];
				$nomeutente=$riga['nome_utente'];
				$passwordutente=$riga['password_utente'];
				$email=$riga['email'];
				$codfiscale=$riga['cod_fiscale'];
				$indirizzo=$riga['indirizzo'];
				$citta=$riga['citta'];
				$provincia=$riga['provincia'];
				$cap=$riga['cap'];
				$cellulare=$riga['cellulare'];
				
			echo"<tr><td width='40%'>$cognome</td><td width='40%'>$nome</td></tr>";
			}
			echo"</table>";
		?>
</body>
</html>