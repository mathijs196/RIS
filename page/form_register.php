<!-- FORM_REGISTER.PHP

ERIK SMITH

FUNCTIES:
- Account aan kunnen maken
- Gegevens worden in de database gezet

-->


<table>
<form method="post" action="register.php">
<tr><td>Naam:*</td><td>			<input name="naam" type="text" size="20" maxlength="20" required></td></tr>
<tr><td>Tussenvoegsel:*</td><td><input name="tv" type="text" size="20" maxlength="5" required></td></tr>
<tr><td>Achternaam:*</td><td>			<input name="achternaam" type="text" size="20" maxlength="20" required></td></tr>
<tr><td>Emailadres:*</td><td>	<input name="emailadres" type="text" size="20" maxlength="40" required></td></tr>
<tr><td>Wachtwoord:*</td><td>	<input name="wachtwoord" type="password" size="20" maxlength="20" required></td></tr>
<tr><td>	</td><td>			<input name="" type="text" size="30" maxlength="30" required></td></tr> 
<br>
</table>

	<input type="submit" name="submit" value="Registreren">
	<input name="reset" type="reset" value="Leegmaken">
</form>
