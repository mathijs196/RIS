<?php include 'inc/db_connect.php';?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
         <a class="navbar-brand" href="#"><img src="img/logo.png" style="display: inline-block; height: 100px; width: 100px;"></a>
		<a class="navbar-brand" href="#">Ricks Interdimensional Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="?page=home">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=over">Over</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="?page=contact">Contact</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="?page=product_info&product=1">Productpagina (test)</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="?page=form_register">Registeren</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
<div class="row">	
		<div class="col-lg-3">
		<?php include 'page/form_login.php' ?>
          <h1 class="my-4">RIS webshop</h1>
          <div class="list-group">
		 
		
            <a href="#" class="list-group-item active">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
			
          </div>
        </div>
	<?php 
		if(!empty($_GET)){
		$page = $_GET['page'];
		include "page/$page.php";
		}else{
		include "page/home.php";
		}
	?>
	</div>	
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>