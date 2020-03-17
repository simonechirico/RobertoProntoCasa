<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stile.css?ts=<?=time()?>&quot">
		<title>Registrati</title>
	</head>
		<body>
			<div class="entry title">
				<center><h1>Registrati</h1>
			</div>
			<br>
			<form name="accesso" method="post" action="ghost-registr-proprietario.php">
			
				<center>
					<input type="text" class="content-gen" name="username" placeholder="Username" required><br><br>
					<input type="password" class="content-gen" name="passw-proprietario" placeholder="Password" required><br><br>
					<input type="submit" class="btn" value="Registrati" name="registrati">
			</form>
			
		</body>
</html>