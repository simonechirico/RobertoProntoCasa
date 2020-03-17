<?php
	// CONNESSIONE AL DATABASE
	$conn=mysql_connect("localhost","simonechirico","");
	$db=mysql_select_db("my_simonechirico",$conn);
	$idcategoria=$_GET['getidcategoria'];
	$nomecategoria=$_POST['nomecategoria'];
	
	$modifica=mysql_query("UPDATE categorie SET nome_categoria='$nomecategoria' WHERE id_categoria='$idcategoria'");
			
	header("location:elenco-categorie.php");
?>