// FUNZIONE MENU HAMBURGER

$(document).ready(function(){

	$(".header__icon-bar").click(function(e){

		$(".header__menu").toggleClass('is-open');
		e.preventDefault();

	});
});

// CAMBIO DI PAGINE INTERNE DELLA DROP-DOWN-LIST

function openProducts(evt, ProductsName) {
	var i, contentproductsright, tablinks;
	contentproductsright = document.getElementsByClassName("contentproductsright");
	for (i = 0; i < contentproductsright.length; i++) {
		contentproductsright[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(ProductsName).style.display = "block";
	evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();