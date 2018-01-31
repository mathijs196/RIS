<!-- LOGIN.php

FUNCTIES:
- Form met als action de login_controle.php
- Input gebruikersnaam en wachtwoord
- Aantal vereisten aan gebruikersnaam en wachtwoord
- Submit 

-->



	<?php
	session_start(); 
	if(isset($_SESSION["emailadres"])){
	echo "Je bent ingelogd als: <br>". $_SESSION["naam"];
	echo "<br><br><a class='btn btn-success' href='?page=uitloggen'>Uitloggen</a><br><br>";
		
		switch($_SESSION["functie"]){
			case 0:
?>
<h4> Menu voor logistiek</h4>
<a href="#">Link 1</a><br>
<a href="#">Link 2</a><br>
<a href="#">Link 3</a><br>

<?php			
			break;
			case 1:
?>
<h4> Menu voor Functie 1</h4>
<a href="#">Link 1</a><br>
<a href="#">Link 2</a><br>
<a href="#">Link 3</a><br>

<?php
			break;
			case 2: 
			?>
<h4> Menu voor Functie 2</h4>
<a href="#">Link 1</a><br>
<a href="#">Link 2</a><br>
<a href="#">Link 3</a><br>

<?php
			break;
		}	
	}else{
	?>
	<form method="post" action="?page=login">
	<table>
	<tr><td>Emailadres:</td><td> <input name="emailadres" type="text"  size="15" ></td></tr>
	<tr><td>Wachtwoord: </td><td><input name="wachtwoord" type="password" size="15" maxlength="20"></td></tr>
	</table>
	
	<a href="?page=forgotpass">Wachtwoord vergeten?</a>
	<br><br>
	<input class="btn btn-success" type="submit" name="Submit" value="Inloggen">
	<input class="btn btn-success" name="reset" type="reset" id="reset" value="Leegmaken">
	</form>
	<br>
	<a href="?page=form_register">Maak een account aan</a>
	<?php 
	}
	?>