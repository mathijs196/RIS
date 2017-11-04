<?php
include 'inc/db_connect.php';

$query = 	"SELECT * FROM producten";
$result = mysqli_query($db, $query) or die("FOUT : " . mysqli_error()); 

while($row = mysqli_fetch_assoc($result)){
?>

       
        <div class="col-lg-9">

<<<<<<< HEAD
          
=======
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/slides/slide1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/slides/slide2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/slides/slide3.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
>>>>>>> 27a42ab7e472a7047de2e7b6791b78875692eab8

          <div class="row">

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
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
	  
<?php } ?>