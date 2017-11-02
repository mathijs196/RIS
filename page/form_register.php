<!-- FORM_REGISTER.PHP

ERIK SMITH

FUNCTIES:
- Account aan kunnen maken
- Gegevens worden in de database gezet
- Per 'Categorie' ingedeeld d.m.v. fieldset

-->



<form method="post" action="register.php">
<fieldset>
	<legend>Persoonlijke informatie: </legend>
	<table>
		<tr><td>Naam:*</td><td>			<input name="naam" type="text" size="20" maxlength="20" required></td></tr>
		<tr><td>Tussenvoegsel:*</td><td><input name="tv" type="text" size="20" maxlength="5" required></td></tr>
		<tr><td>Achternaam:*</td><td>	<input name="achternaam" type="text" size="20" maxlength="20" required></td></tr>
		<tr><td>Postcode*</td><td>		<input name="postcode" type="text" size="20" placeholder="9999AA" maxlength="6" required></td></tr>
		<tr><td>Woonplaats:*</td><td>	<input name="woonplaats" type="text" size="20" maxlength="25" required></td></tr>
		<tr><td>Straat:*</td><td>		<input name="straat" type="text" size="20" maxlength="25" required></td></tr>
		<tr><td>Huisnummer:*</td><td>	<input name="huisnummer" type="number" size="20" maxlength="6" required></td></tr>
		<tr><td>Toevoeging:*</td><td>	<input name="toevoeging" type="text" size="20" maxlength="3" required></td></tr>
	</table>
</fieldset>	
<fieldset>
	<table>
		<legend>Accountgegevens:</legend>
		<tr><td>Emailadres:*</td><td>	<input name="emailadres" type="text" placeholder="voorbeeld@voorbeeld.com" size="20" maxlength="40" required></td></tr>
		<tr><td>Wachtwoord:*</td><td>	<input name="wachtwoord" type="password"  size="20" maxlength="20" required></td></tr>
		<tr><td>	</td><td>			<input name="" type="text" size="30" maxlength="30" required></td></tr> 
	</table>
</fieldset>	
<br>


	<input type="submit" name="submit" value="Registreren">
	<input name="reset" type="reset" value="Leegmaken">
</form>
