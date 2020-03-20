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
	<script src="script.js"></script>
	<!---------------------------------------------------------------------------->
	<title>Homepage</title>
<body>
<?php
	@include("header.php");
	@include("sub-menu.php");
	@include("drop-down-list.php");
?>
	<section class="cover">
		<div class="cover__filter">
		</div>
		<div class="cover__caption">
			<div class="cover__caption__copy">
				<h1>Per te ci siamo, SEMPRE</h1>
				<h2>Acquista ora</h2>
				<a href="" class="button"><b>Vai allo Shop</b> <i class="fa fa-shopping-cart"></i></a>
			</div>
		</div>
	</section>
	
	<section class="cards clearfix">
		<div class="card">
			<img class="card__image"src="/cliente/img-cliente/mobili-unsplash.jpg" alt="Mobili">
			<div class="card__copy">
				<a href=""><h3>Mobili e arredi</h3></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
		
		<div class="card">
			<img class="card__image"src="/cliente/img-cliente/casalinghi-browser.jpg" alt="Posate da tavola">
			<div class="card__copy">
				<a href=""><h3>Casalinghi</h3></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
		
		<div class="card">
			<img class="card__image"src="/cliente/img-cliente/elettrodomestici-browser.jpg" alt="Elettrodomestici">
			<div class="card__copy">
				<a href=""><h3>Elettrodomestici</h3></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
	</section>

	<section class="banner clearfix">
		<div class="banner__image"></div>
		<div class="banner__copy">
			<div class="banner__copy__text">
				<h3>Banner Title</h3>
				<h4>Banner Subtitle</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas autem quam, explicabo pariatur sit nisi, adipisci saepe.</p>
			</div>
		</div>
	</section>

	<section class="cards clearfix">
		<div class="card">
			<img class="card__image"src="https://source.unsplash.com/category/nature/400x260" alt="Nature">
			<div class="card__copy">
				<h3>Title Card</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
		<div class="card">
			<img class="card__image"src="https://source.unsplash.com/category/food/400x260" alt="Nature">
			<div class="card__copy">
				<h3>Title Card</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
		<div class="card">
			<img class="card__image"src="https://source.unsplash.com/category/people/400x260" alt="Nature">
			<div class="card__copy">
				<h3>Title Card</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
	</section>

	<section class="banner2 clearfix">
		<div class="banner__copy">
			<div class="banner__copy__text">
				<h3 style="color: white;">Prodotti belli ma non solo</h3>
				<h4 style="color: white;">Dall'origine delle materie prime alla seconda vita dei prodotti, scopri i nostri impegni.</h4>
				<p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas autem quam, explicabo pariatur sit nisi, adipisci saepe.</p>
			</div>
		</div>
	</section>

<?php
	@include("footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
// FUNZIONE MENU HAMBURGER

$(document).ready(function(){

	$(".header__icon-bar").click(function(e){

		$(".header__menu").toggleClass('is-open');
		e.preventDefault();

	});
});	 
</script>

</head>

</body>
</html>
