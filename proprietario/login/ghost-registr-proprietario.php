<?php
		// CONNESSIONE AL DATABASE
		$conn=mysql_connect("localhost","simonechirico","");
		$db=mysql_select_db("my_simonechirico",$conn);
			
		$username=$_POST['username'];
		$passwproprietario=$_POST['passw-proprietario'];
		
		$aggiungi="INSERT INTO proprietario (username_proprietario,password_proprietario)VALUES('$username','$passwproprietario')";
		mysql_query($aggiungi);
			
		header("location:avvenuta-registr-proprietario.php");
?>