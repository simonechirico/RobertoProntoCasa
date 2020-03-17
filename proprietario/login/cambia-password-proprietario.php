<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>&quot">
		<title></title>
	</head>
	<body>
		<div class="entry title">
			<center>
			<h1>Modifica Password</h1>
		</div>
		<p align="center">Ti consigliamo di usare una password forte che non utilizzi altrove</p>
		<br>
		<form name="changelogin" method="post" action="pag-controllo.php">
			<center>
			<input type="password" class="content-gen" name="oldpassw" placeholder="Vecchia Password" required><br>
			<input type="password" class="content-gen" name="nuovapassw" value="" placeholder="Nuova Password" required><br>
			<input type="password" class="content-gen" name="repnuovapassw" value="" placeholder="Ripeti Nuova Password" required><br><br>
			<input type="submit" class="btn" value="SALVA MODIFICHE" name="modifica-password">
		</form>
	</body>
</html>