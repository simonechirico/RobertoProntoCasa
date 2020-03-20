<html>
<head>
<!------------- JQUERY ( FUNZIONI DEI PRODOTTI E ROTAZIONE ICONE FRECCE ! ) -------------->

<script src="jquery-2.2.0.min.js">	
</script>
<script>
	$(document).ready(function(){
		$("#prodotti").click(function(){
			$("#d-d-l").toggle(300);
			$("#arrow-img").css({"transform": "rotate(180deg)", "transition-property": "transform", "transition-duration": "0.35s", "transition-timing-function": "ease", "transition-delay": "0s"});
		});
	});
</script>

</head>
<body>
<div class="header-mod clearfix">
	<div class="txt-img">
		<b>CHI SIAMO</b><span class="padding-arrow"><img class="icon" src="/cliente/img-cliente/grey-arrow.png"></span>
	</div>
	
	<div id="prodotti" class="txt-img">
		<b>PRODOTTI</b><span class="padding-arrow"><img id="arrow-img" class="icon" src="/cliente/img-cliente/grey-arrow.png"></span>
	</div>
	<div class="txt-img">
		<b>SHOP</b><span class="padding-arrow"><img class="icon" src="/cliente/img-cliente/grey-arrow.png"></span>
	</div>
	<div class="txt-img">
		<b>AIUTO</b><span class="padding-arrow"><img class="icon" src="/cliente/img-cliente/grey-arrow.png"></span>
	</div>
	<div class="txt-img" style="float: right;">
		<b>Consigli d'arredo</b>
	</div>
</div>
</body>
</html>