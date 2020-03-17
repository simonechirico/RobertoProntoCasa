<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stile-sito.css?ts=<?=time()?>&quot">
		<title>Accedi</title>
	</head>
		<body>
			<div class="entry title">
				<center><h1>Accedi</h1>
			</div>
			<br>
			<form name="accesso" method="post" action="welcome.php">
				<center>
					<input type="text" class="txt-pssw" name="username" value="" placeholder="Username" required><br><br>
					<input type="password" class="txt-pssw" name="passw" value="" placeholder="Password" required><br><br>
					<input type="submit" class="btn" value="Accedi" name="accedi">
			</form>
			<div class>
				<h2>Sei un nuovo cliente?</h2><br>
				<a href="pag-registrazione.php">
					<input type="button" class="btn" value="Registrati">
				</a>
				
			</div>
			
		</body>
</html>
