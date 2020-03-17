<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stile.css?ts=<?=time()?>&quot">
		<title>Accedi</title>
	</head>
		<body>
			<div class="entry title">
				<center><h1>Accedi</h1>
			</div>
			<br>
			
			<form name="accesso" method="post" action="controllo-dati.php">
				<center>
					<input type="text" class="content-gen" name="userproprietario" placeholder="Username" required><br><br>
					<input type="password" class="content-gen" name="passwproprietario" placeholder="Password" required><br><br>
					<input type="submit" class="btn" value="Accedi" name="accedi">
			</form>
			
		</body>
</html>