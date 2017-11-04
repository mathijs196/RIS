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
	echo "Je bent ingelogd als: ". $_SESSION["naam"]. $_SESSION["tussenvoegsel"]. $_SESSION["achternaam"];
	echo "<br><br><a class='btn btn-success' href='?page=uitloggen'>Uitloggen</a>";
	}else{
	?>
	<form method="post" action="?page=login">
	<table>
	<tr><td>Emailadres:</td><td> <input name="emailadres" type="text"  size="15" ></td></tr>
	<tr><td>Wachtwoord: </td><td><input name="wachtwoord" type="password" size="15" maxlength="20"></td></tr>
	</table>
	<br>
	<input class="btn btn-success" type="submit" name="Submit" value="Inloggen">
	<input class="btn btn-success" name="reset" type="reset" id="reset" value="Leegmaken">
	</form>
	<br>
	<a href="?page=form_register">Maak een account aan</a>
	<?php 
	}
	?>