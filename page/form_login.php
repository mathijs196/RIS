<!-- LOGIN.php

ERIK SMITH

FUNCTIES:
- Form met als action de login_controle.php
- Input gebruikersnaam en wachtwoord
- Aantal vereisten aan gebruikersnaam en wachtwoord
- Submit 

-->



	<?php
	session_start(); 
	if(isset($_SESSION["emailadres"])){
	echo "Je bent ingelogd als: ". $_SESSION["naam"];
	echo "<br><a href='?page=uitloggen'>Uitloggen</a>";
	}else{
	?>
	<form method="post" action="?page=login">
	<table>
	<tr><td>Gebruikersnaam:</td><td> <input name="emailadres" type="text"  size="15" ></td></tr>
	<tr><td>Wachtwoord: </td><td><input name="wachtwoord" type="password" size="15" maxlength="20"></td></tr>
	</table>
	<br>
	<input type="submit" name="Submit" value="Inloggen">
	<input name="reset" type="reset" id="reset" value="Leegmaken">
	</form>
	<?php 
	}
	?>