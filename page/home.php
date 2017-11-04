<?php
include 'inc/db_connect.php';

$query = 	"SELECT * FROM producten";
$result = mysqli_query($db, $query) or die("FOUT : " . mysqli_error()); 

while($row = mysqli_fetch_assoc($result)){
?>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/<?php echo $row['afbeelding'] ?>.png" style="height: 250px; width: 250px;" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $row['naam'] ?></a>
                  </h4>
                  <h5>&euro;<?php echo $row['prijs'] ?></h5>
                  <p class="card-text"><?php echo $row['omschrijving'] ?></p>
                </div>
                <div class="card-footer">
                  <button class="btn btn-success">In winkelwagen</button>
                </div>
              </div>
            </div>

            

        
	  
<?php } ?>