<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://photorankstatics-a.akamaihd.net/static/frontend/v3.5.0/build.min.css" id="olapicsdk_bootstrap_file">
		<link rel="stylesheet" type="text/css" href="hp-style.css?ts=<?=time()?>&quot">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Web Site</title>
<body>
<?php
	@include("header.php");
?>
	
	<div class="header-mod clearfix">
		<div class="txt-img">
			<b>CHI SIAMO</b><span class="padding-arrow"><img class="icon" src="/rpc/cliente/img-cliente/grey-arrow.png"></span>
		</div>
		<div id="prodotti" class="txt-img">
			<a href="prodotti.php"><b>PRODOTTI</b><span class="padding-arrow"><img id="arrow-img" class="icon" src="/rpc/cliente/img-cliente/grey-arrow.png"></span></a>
		</div>
		<div class="txt-img">
			<b>SHOP</b><span class="padding-arrow"><img class="icon" src="/rpc/cliente/img-cliente/grey-arrow.png"></span>
		</div>
		<div class="txt-img">
			<b>AIUTO</b><span class="padding-arrow"><img class="icon" src="/rpc/cliente/img-cliente/grey-arrow.png"></span>
		</div>
		<div class="txt-img" style="float: right;">
			<b>Consigli d'arredo</b>
		</div>
	</div>

	<div id="d-d-l" class="drop-down-list">
		<div class="product-list">
			<p class="p-l-mod line">
				<a href="">Mobili</a>
			</p>
			<p class="p-l-mod">
				<a href="/rpc/cliente/casalinghi.php">Casalinghi</a>
			</p>
			<p class="p-l-mod">			
				<a href="">Elettrodomestici</a>
			</p>
			<p class="p-l-mod">	
				<a href="">Oggettistica</a>
			</p>
			<p class="p-l-mod">			
				<a href="">Giocattoli</a>
			</p>
			<p class="p-l-mod">	
				<a href="">Giardino</a>
			</p>
			<p class="p-l-mod">	
				<a href="">Articoli da spiaggia</a>
			</p>
		</div>
		<div class="box1-2">
			<p class="" style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;">
				<b><a href="">Mobili</a></b>
			</p>
			<p style="padding-top: 10px;">
				<a href="">Casalinghi</a>
			</p>
			<p class="">			
				<a href="">Elettrodomestici</a>
			</p>
			<p>	
				<a href="">Oggettistica</a>
			</p>
			<p>			
				<a href="">Giocattoli</a>
			</p>
			<p>	
				<a href="">Giardino</a>
			</p>
			<p>	
				<a href="">Articoli da spiaggia</a>
			</p>
		</div>
		<div class="box1-2">
			<p style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;">
				<b><a href="">Mobili</a></b>
			</p>
			<p style="padding-top: 10px;">
				<a href="" class="trans">Casalinghi</a>
			</p>
			<p class="">			
				<a href="">Elettrodomestici</a>
			</p>
			<p>	
				<a href="">Oggettistica</a>
			</p>
			<p>			
				<a href="">Giocattoli</a>
			</p>
			<p>	
				<a href="">Giardino</a>
			</p>
			<p>	
				<a href="">Articoli da spiaggia</a>
			</p>
		</div>
		<div class="box-img">
			<p style="padding-top: 10px;padding-right: 10px;padding-bottom: 10px;">
				<b>Scopri anche</b>
			</p>
			<img src="/rpc/cliente/img-cliente/img-product-list-right.png" width="100%">
			<p style="padding-top: 10px;">
				<a href=""><i>Novità divani</i></a>
			</p>
		</div>
	</div>
	
	<section class="cover">
		<div class="cover__filter">
		</div>
		<div class="cover__caption">
			<div class="cover__caption__copy">
				<h1>Per te ci siamo, SEMPRE</h1>
				<h2>Acquista ora</h2>
				<a href="" class="button">Vai allo Shop <i class="fa fa-shopping-cart"></i></a>
			</div>
		</div>
	</section>
	
	<section class="cards clearfix">
		<div class="card">
			<img class="card__image"src="/rpc/cliente/img-cliente/mobili-unsplash.jpg" alt="Mobili">
			<div class="card__copy">
				<h3>Mobili e arredi</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
		
		<div class="card">
			<img class="card__image"src="/rpc/cliente/img-cliente/casalinghi-browser.jpg" alt="Posate da tavola">
			<div class="card__copy">
				<h3>Casalinghi</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sequi incidunt optio, asperiores dolorum ratione excepturi. </p>
			</div>
		</div>
		
		<div class="card">
			<img class="card__image"src="/rpc/cliente/img-cliente/elettrodomestici-browser.jpg" alt="Elettrodomestici">
			<div class="card__copy">
				<h3>Elettrodomestici</h3>
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


<footer class="prefooter clearfix">
	<div class="prefooter__caption__copy">
		<h3 style="margin-top: 0;">PAGAMENTO SICURO</h3>
	</div>
		<div class="div-space">
		</div>
		<div class="prefooter-payment-logo-img">
			<div class="payment-logo">
				<img class="prefooter-image"src="/rpc/cliente/img-cliente/paypal.png" alt="PayPal">
			</div>
			<div class="payment-logo">
				<img class="prefooter-image"src="/rpc/cliente/img-cliente/visa.png" alt="Visa">
			</div>
			<div class="payment-logo">
				<img class="prefooter-image"src="/rpc/cliente/img-cliente/mastercard.png" alt="MasterCard">
			</div>
			<div class="payment-logo">
				<img class="prefooter-image"src="/rpc/cliente/img-cliente/maestro.png" alt="Maestro">
			</div>
			<div class="payment-logo">
				<img class="prefooter-image"src="/rpc/cliente/img-cliente/amazon-pay.png" alt="Amazon Pay">
			</div>
			<div class="payment-logo">
				<img class="prefooter-image"src="/rpc/cliente/img-cliente/bonifico-bancario.png" alt="Bonifico Bancario">
			</div>
		</div>
		<div class="div-space">
		</div>
	
</footer>

<footer class="footer clearfix">
	<div class="footer__caption__copy">
		<h3 style="margin-top: 0;">PAGAMENTO SICURO</h3>
	</div>	
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
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
