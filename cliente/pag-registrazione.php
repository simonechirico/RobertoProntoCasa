<html>
	<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stile-sito.css?ts=<?=time()?>&quot">
	<script language="JavaScript">
		function egualemail() {
			firstemail=document.registrazione.email.value;
			secondemail=document.registrazione.repemail.value;
				if (secondemail != firstemail) {
					alert("L'email e l'email di conferma non corrispondono");
					return false;
				}
		}
		function egualpassw() {
			firstpassw=document.registrazione.passw.value;
			secondpassw=document.registrazione.repassw.value;
				if (secondpassw != firstpassw) {
					alert("La password e la password di conferma non corrispondono");
					return false;
				}
		}
	</script>
	</head>
		<body>
		<div class="">
			<h1>Registrazione</h1><br>
		</div>
		<div class="content-form">
			<form name="registrazione" method="post" action="fine-registrazione.php">
				<input type="text" class="content-name" name="nome" value="" placeholder="Nome*" required>
				<input type="text" class="content-surname" name="cognome" value="" placeholder="Cognome*" required><br>
				<input type="text" class="content-gen" name="email" value="" placeholder="E-mail*" required><br>
				<input type="text" class="content-gen" name="repemail" value="" placeholder="Ripeti e-mail*" required><br>
				<input type="password" id="inpt-txt" class="content-gen" name="passw" value="" placeholder="Password*" required><br>
				<div class="inner" id="div-inner">
                    <p>Verifica la sicurezza della tua password!<br>Deve contenere almeno : </p>
                        <ul>
							<li class="min-char">8 caratteri</li>
							<li class="uppercase">una maiuscola</li>
                            <li class="lowercase">una minuscola</li>
                            <li class="spec-char">un carattere speciale (!@#$%).</li>
                            <li class="number">una cifra</li>
                        </ul>
                </div>
				<input type="password" class="content-gen" name="repassw" value="" placeholder="Ripeti password*" required><br>
				<input type="text" class="content-gen" name="codfiscale" value="" placeholder="Codice fiscale*" required><br>
				<input type="text" class="content-gen" name="indirizzo" value="" placeholder="Indirizzo*" required><br>
				<input type="text" class="content-city" name="citta" value="" placeholder="Città*" required>
				
				<select class="content-prov" id="idprovincia" name="provincia" value="" placeholder="Provincia*" required>
					<option value="">-</option>
					<option value="Agrigento">Agrigento</option>
					<option value="Alessandria">Alessandria</option>
					<option value="Ancona">Ancona</option>
					<option value="Aosta">Aosta</option>
					<option value="Arezzo">Arezzo</option>
					<option value="Ascoli">Ascoli Piceno</option>
					<option value="Asti">Asti</option>
					<option value="Avellino">Avellino</option>
					<option value="Bari">Bari</option>
					<option value="Barletta">Barletta-Andria-Trani</option>
					<option value="Belluno">Belluno</option>
					<option value="Benevento">Benevento</option>
					<option value="Bergamo">Bergamo</option>
					<option value="Biella">Biella</option>
					<option value="Bologna">Bologna</option>
					<option value="Bolzano">Bolzano</option>
					<option value="Brescia">Brescia</option>
					<option value="Brindisi">Brindisi</option>
					<option value="Cagliari">Cagliari</option>
					<option value="Caltanissetta">Caltanissetta</option>
					<option value="Campobasso">Campobasso</option>
					<option value="Carbonia">Carbonia-iglesias</option>
					<option value="Caserta">Caserta</option>
					<option value="Catania">Catania</option>
					<option value="Catanzaro">Catanzaro</option>
					<option value="Chieti">Chieti</option>
					<option value="Como">Como</option>
					<option value="Cosenza">Cosenza</option>
					<option value="Cremona">Cremona</option>
					<option value="Crotone">Crotone</option>
					<option value="Cuneo">Cuneo</option>
					<option value="Enna">Enna</option>
					<option value="Fermo">Fermo</option>
					<option value="Ferrara">Ferrara</option>
					<option value="Firenze">Firenze</option>
					<option value="Foggia">Foggia</option>
					<option value="fc">Forl&igrave;-Cesena</option>
					<option value="Frosinone">Frosinone</option>
					<option value="Genova">Genova</option>
					<option value="Gorizia">Gorizia</option>
					<option value="Grosseto">Grosseto</option>
					<option value="Imperia">Imperia</option>
					<option value="Isernia">Isernia</option>
					<option value="sp">La spezia</option>
					<option value="aq">L'aquila</option>
					<option value="Latina">Latina</option>
					<option value="Lecce">Lecce</option>
					<option value="Lecco">Lecco</option>
					<option value="Livorno">Livorno</option>
					<option value="lo">Lodi</option>
					<option value="lu">Lucca</option>
					<option value="mc">Macerata</option>
					<option value="mn">Mantova</option>
					<option value="ms">Massa-Carrara</option>
					<option value="mt">Matera</option>
					<option value="vs">Medio Campidano</option>
					<option value="Messina">Messina</option>
					<option value="Milano">Milano</option>
					<option value="mo">Modena</option>
					<option value="mb">Monza e della Brianza</option>
					<option value="Napoli">Napoli</option>
					<option value="no">Novara</option>
					<option value="nu">Nuoro</option>
					<option value="og">Ogliastra</option>
					<option value="ot">Olbia-Tempio</option>
					<option value="or">Oristano</option>
					<option value="pd">Padova</option>
					<option value="Palermo">Palermo</option>
					<option value="pr">Parma</option>
					<option value="pv">Pavia</option>
					<option value="Perugia">Perugia</option>
					<option value="pu">Pesaro e Urbino</option>
					<option value="pe">Pescara</option>
					<option value="pc">Piacenza</option>
					<option value="pi">Pisa</option>
					<option value="pt">Pistoia</option>
					<option value="pn">Pordenone</option>
					<option value="pz">Potenza</option>
					<option value="po">Prato</option>
					<option value="rg">Ragusa</option>
					<option value="ra">Ravenna</option>
					<option value="ReggioCalabria">Reggio di Calabria</option>
					<option value="re">Reggio nell'Emilia</option>
					<option value="ri">Rieti</option>
					<option value="Rimini">Rimini</option>
					<option value="Roma">Roma</option>
					<option value="ro">Rovigo</option>
					<option value="Salerno">Salerno</option>
					<option value="ss">Sassari</option>
					<option value="sv">Savona</option>
					<option value="Siena">Siena</option>
					<option value="sr">Siracusa</option>
					<option value="so">Sondrio</option>
					<option value="ta">Taranto</option>
					<option value="te">Teramo</option>
					<option value="tr">Terni</option>
					<option value="Torino">Torino</option>
					<option value="tp">Trapani</option>
					<option value="tn">Trento</option>
					<option value="tv">Treviso</option>
					<option value="ts">Trieste</option>
					<option value="ud">Udine</option>
					<option value="va">Varese</option>
					<option value="ve">Venezia</option>
					<option value="vb">Verbano-Cusio-Ossola</option>
					<option value="vc">Vercelli</option>
					<option value="vr">Verona</option>
					<option value="vv">Vibo valentia</option>
					<option value="vi">Vicenza</option>
					<option value="vt">Viterbo</option>
				</select>
				<input type="text" class="content-cap" name="cap" value="" placeholder="CAP*" required><br>
				<input type="submit" class="btn" value="Registrati" onclick="return(egualemail());" name="registrati">
			</form>
		</div>
		</body>
</html>
