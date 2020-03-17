<?php
	// CONNESSIONE AL DATABASE
	$conn=mysql_connect("localhost","simonechirico","");
	$db=mysql_select_db("my_simonechirico",$conn);
			
	$nomecategoria=$_POST['nomecategoria'];
		
	$aggiungi="INSERT INTO categorie (nome_categoria)VALUES('$nomecategoria')";
	mysql_query($aggiungi);
			
	header("location:elenco-categorie.php");
?>