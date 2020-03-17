<?php
	// CONNESSIONE AL DATABASE
	$conn=mysql_connect("localhost","simonechirico","");
	$db=mysql_select_db("my_simonechirico",$conn);
	
	$idprodotto=$_GET['getidprodotto'];
	
	$nomeprodotto=$_POST['nomeprodotto'];
	$descrprodotto=$_POST['descrprodotto'];
	$prezzoprodotto=$_POST['prezzoprodotto'];
	$codcategoria=$_POST['codcategoria'];
	$array_imgprodotti=$_FILES['img_prodotti'];
	$imgprodotti=$array_imgprodotti['name'];
	move_uploaded_file($_FILES['img_prodotti']['tmp_name'],'../rpc/proprietario/img-proprietario/'.$_FILES['img_prodotti']['name']);
	
	$aggiungi="INSERT INTO prodotti(id_prodotto,nome_prodotto,descr_prodotto,prezzo_prodotto,cod_categoria)VALUES('$idprodotto','$nomeprodotto','$descrprodotto','$prezzoprodotto','$codcategoria')";
	mysql_query($aggiungi);
			
	header("location:elenco-prodotti.php");
?>