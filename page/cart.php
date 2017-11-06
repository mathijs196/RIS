<?php 
include ('inc/db_connect.php');

		if(!empty($_GET)){
				$productid = $_GET['product'];

				$query = 	"SELECT * FROM producten 
							WHERE idproducten ='" . $_GET['product'] ."'"; 
				$result = mysqli_query($db, $query) or die("FOUT : " . mysqli_error());
		}
		
		
		
		$row = mysqli_fetch_assoc($result);
		
		
	

			
?>			

	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					
					
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="img/<?php echo $row['afbeelding']?>.png" alt="..." style="height: 50px; width: 50px;" class="img-responsive"/>
									</div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $row['naam']?></h4>
										
										
									</div>
								</div>
							</td>
							<td data-th="Price">€<?php echo $row['prijs']?>,00</td>
							<td data-th="Quantity">
								<input name="hoeveel" type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center"></td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="?page=home" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
				
				<?php array_push($winkelmand, $row); 
				print_r($winkelmand);
				?>



