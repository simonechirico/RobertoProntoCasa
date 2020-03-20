<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://photorankstatics-a.akamaihd.net/static/frontend/v3.5.0/build.min.css" id="olapicsdk_bootstrap_file">
	<!------------------------------PAGINA DI STILE------------------------------->
	<link rel="stylesheet" type="text/css" href="hp-style.css?ts=<?=time()?>&quot">
	<!---------------------------------------------------------------------------->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!------------------------------PAGINA JAVASCRIPT----------------------------->
	<script src="codice.js"></script>
	<!---------------------------------------------------------------------------->
	<title>Carrello</title>
</head>
<body>
<?php
	@include("header.php");
	@include("sub-menu.php");
?>
	<div id="" class="container-carrello">
		<div class="title-carrello">
			<div class="img-carrello">
				<img src="/cliente/img-cliente/carrello-vuoto.png" width="100%">
			</div>
			<h3>Il tuo carrello è vuoto!</h3>
		</div>
	</div>
</body>
</html>
