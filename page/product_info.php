<!-- PRODUCT_INFO.PHP

ERIK SMITH

FUNCTIES:
- Weergeven van product

-->

<div style="border: 1px solid; width: 600px; height: 500px;; padding-left: 5px;">
		<?php 
		include ('../inc/db_connect.php');

			if(!empty($_GET)){
				$productid = $_GET['product'];

				$query = 	"SELECT * FROM producten 
							WHERE idproducten ='" . $_GET['product'] ."'"; 
				$result = mysqli_query($db, $query) or die("FOUT : " . mysqli_error()); 
				
				while($row = mysqli_fetch_assoc($result)){
					
		?>
	<h1> <?php echo $row['naam']; ?></h1>
	<img src="../img/<?php echo $row['idproducten'] ?>.png" style="width: 200px; height: 100px; border: 1px solid; float: left; ">
	<table style="float: left; margin-left: 10px; width: 295px;">
	<tr><td><?php echo "<b>&euro; ". $row['prijs'].",00 </b>" ?></td></tr>
	<tr><td><?php 
	$voorraad = $row['hoeveelheid'];
		if($voorraad == 0){
		echo "<i>Levertijd onbekend</i>";
		}elseif($voorraad > 0 ){
		echo "Levertijd: 1 tot 2 werkdagen";
		}

	?></td></tr>
	<tr><td><button>Winkelwagen</button></td></tr>

	</table>
		<div style="float: left; width: 550px;">
			<h3>Omschrijving</h3>
			<?php echo $row['omschrijving'];?>
		</div>
		<div style="float: left; width: 550px;">
			<h3>Specificaties</h3>
			<?php echo $row['specificaties'];?>
		</div>
</div>



<?php 
		}
	}else {
	}
	mysqli_close($db);
?>
