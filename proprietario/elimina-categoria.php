<?php
	//CONNESSIONE DB
	$conn=mysql_connect("localhost","simonechirico","");
	$db=mysql_select_db("my_simonechirico",$conn);
			
	//RICHIAMO VARIABILE $idcategoria
	$idcategoria=$_GET['getidcategoria'];
			
	//VARIABILE ELIMINA
	$elimina=mysql_query("DELETE FROM categorie WHERE id_categoria='$idcategoria'",$conn);
			
	header("location:elenco-categorie.php");
?>