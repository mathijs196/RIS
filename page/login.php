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

include ('inc/db_connect.php');


if (!empty($_POST)){
	
	$emailadres = mysqli_real_escape_string($db, $_POST['emailadres']);
	$wachtwoord = mysqli_real_escape_string($db, $_POST['wachtwoord']);
	$query = 	"SELECT * FROM gebruiker 
				WHERE emailadres ='" . $_POST["emailadres"] ."'
				AND wachtwoord='" . $_POST["wachtwoord"] ."'"; 
	$result = mysqli_query($db, $query) or die("FOUT : " . mysqli_error()); 
	
	if (mysqli_num_rows($result) > 0){
				$_SESSION["auth"]=true;
				$_SESSION["timeout"]=time() + 120; 
				$_SESSION["emailadres"]=$emailadres;
				
		while($row = mysqli_fetch_assoc($result)) {
		echo "Je bent nu ingelogd als: ". $row['naam']. " ". $row['tussenvoegsel'] . " ". $row['achternaam'];
		$_SESSION["naam"]=$row['naam'];
		header('Location:?page=home');
	}
	
}else{
  	$melding = "Opgegeven gebruikersnaam en/of wachtwoord incorrect";
			die($melding);
		}
}else{
	
}
?>
