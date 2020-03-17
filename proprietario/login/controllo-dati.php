<?php
	// CONNESSIONE AL DATABASE
	$conn=mysql_connect("localhost","simonechirico","");
	$db=mysql_select_db("my_simonechirico",$conn);
	$idproprietario=$_GET['getidproprietario'];
			
	$risultato=mysql_query("SELECT*FROM proprietario WHERE id_proprietario='$idproprietario'",$conn);
	$riga=mysql_fetch_array($risultato);
	$username=$riga['username_proprietario'];
	$passwpropr=$riga['password_proprietario'];
	$userproprietario=$_POST['userproprietario'];
	$pssproprietario=$_POST['passwproprietario'];
		if ( $userproprietario!=$username ) {
			echo"account o password errati";
		}
		else {
			echo"benvenuto";
		}
?>