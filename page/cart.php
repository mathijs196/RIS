<?php
if (isset($_SESSION["winkelwagen"])){
	$_SESSION["winkelwagen"] = $winkelwagen;
}

$winkelwagen = array();
$productenquery = "SELECT * FROM producten WHERE idproducten = '" . $_POST["hidden_id"] ."';";
$productenresultaat = mysqli_query($db, $productenquery) or die("FOUT : " . mysqli_error()); 

while($row = mysqli_fetch_assoc($productenresultaat)){
	array_push($winkelwagen, $row['naam']);
	echo "U heeft " . $winkelwagen[0] . "<br>";
		
}




?>