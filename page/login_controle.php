<!-- LOGIN_CONTROLE.PHP

ERIK SMITH

FUNCTIES:
- Er wordt een sessie gestart
- Database connectie bestand wordt geinclude 
- Controle of de pagina correct is aangeroepen
- Controle gebruikersnaam en wachtwoord
- Controle geslaagd? -> ingelogd.

-->

<?php
session_start(); // sessie beginnen
include ('');

// controleren of pagina correct is aangeroepen.
if (!empty($_POST)){
	
	$gebruiker = mysqli_real_escape_string($db, $_POST['gebruikersnaam']);
	$wachtwoord = mysqli_real_escape_string($db, $_POST['wachtwoord']);
	$query = 	"SELECT * FROM users 
				WHERE gebruikersnaam ='" . $_POST["gebruikersnaam"] ."'
				AND wachtwoord='" . $_POST["wachtwoord"] ."'"; 
	$result = mysqli_query($db, $query) or die("FOUT : " . mysqli_error()); 
		
	if (mysqli_num_rows($result) > 0){
        // gebruikersnaam gevonden, registreer gegevens in session
				$_SESSION["auth"]=true; //auth controleert of een klant is ingelogd
				$_SESSION["timeout"]=time() + 120; 
				$_SESSION["gebruiker"]=$gebruiker;
		while($row = mysqli_fetch_assoc($result)) {
		$rol = $row['rol'];
	}
		// Doorsturen naar beveiligde pagina
	if(($rol) == "admin") {
        header("Location: admin.php"); 
        exit(); 
	}
	elseif(($rol =="medewerker")) {
		header("Location: medewerker.php"); 
        exit(); 
	}
	
}else{
  	$tekst = "Gebruikersnaam en/of wachtwoord incorrect";
			die($tekst);
		}
}else{
	
}
?>
