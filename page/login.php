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
	$query = 	"SELECT * FROM gebruikers 
				WHERE email ='" . $_POST["emailadres"] ."'
				AND wachtwoord='" . $_POST["wachtwoord"] ."'"; 
	$result = mysqli_query($db, $query) or die("FOUT : " . mysqli_error()); 
	
	if (mysqli_num_rows($result) > 0){
				$_SESSION["auth"]=true;
				$_SESSION["timeout"]=time() + 120; 
				$_SESSION["emailadres"]=$emailadres;
				
		while($row = mysqli_fetch_assoc($result)) { 
		$_SESSION["naam"] = $row['naam'];
		$_SESSION["functie"] = $row['functies_idfuncties'];
		
		header('Location:?page=home');
	}
	
}else{
  	echo "Opgegeven gebruikersnaam en/of wachtwoord incorrect";
			
		}
}else{
	
}
?>
