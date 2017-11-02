<!-- LOGIN.php

ERIK SMITH

FUNCTIES:
- Form met als action de login_controle.php
- Input gebruikersnaam en wachtwoord
- Aantal vereisten aan gebruikersnaam en wachtwoord
- Submit 

-->

<h1> inlogformulier </h1>


	<form method="post" action="login_controle.php">
	<table>
	<tr><td>Gebruikersnaam:</td><td> <input name="gebruikersnaam" type="text"  size="20" ></td></tr>
	<tr><td>Wachtwoord: </td><td><input name="wachtwoord" type="password" size="20" maxlength="20"></td></tr>
	</table>
	<br>
	<input type="submit" name="Submit" value="Inloggen">
	<input name="reset" type="reset" id="reset" value="Leegmaken">
	</form>
