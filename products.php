<?php

include"includes/header.php";


if (isset($_GET['category']))
{
	$category_slug = $_GET['category'];
	$category_data = getSlugActive("categories",$category_slug);
	$category = mysqli_fetch_array($category_data);

	if ($category) {
		$cid = $category['id'];
	?>
	
		    
		<div class="py-3 bg-dark">
			<div class="container-fluid px-5">
				<h6 class="text-white"><a href="index.php" class="text-white" style="text-decoration: none;"> Home /</a>
				 <?= $category['name']; ?></h6>
			</div>
		</div>

		<style>
			#loading{
				text-align: center;
				background: url('assets/css/img/loader.gif') no-repeat center;
				height: 150px;
			}

			@media screen and (min-width: 770px){
			  .collapse:not(.show) {
			      display: block;
			      height: auto !important;
			      visibility: visible;
			    }
			    
			}
		</style>

		<div class="py-3">
			<div class="container-fluid px-5">
				<div class="row">
					<div class="col-md-12">
						<h1><?= $category['name']; ?></h1>
						<hr>
						<div class="row">
							<input type="hidden" id="cid" value="<?= $category['id']; ?>">
							<div class="col-md-3">
								<a class="btn btn-dark mb-3" data-bs-toggle="collapse" href="#prod_filter" role="button">
    							<i class="fa fa-filter"></i> Filter
  								</a>
								<div class="collapse" id="prod_filter">
    								<div class="list-group mb-3">
										<h3>Price</h3>
										<input type="hidden" id="hidden_minimum_price" value="0">
										<input type="hidden" id="hidden_maximum_price" value="65000">
										<p id="price_show">Rs.1000 - Rs.65000</p>
										<div id="price_range"></div>
									</div>
									<div class="list-group mb-3">
										<h3>Brand</h3>
										<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
											<?php
												$data = getUniqueProdByCategory($cid);

				                           if (mysqli_num_rows($data) > 0) {
				                             foreach ($data as $row) {
				                            ?>
				                            <div class="list-group-item checkbox">
				                            	<label><input type="checkbox" class="common_selector brand" value="<?= $row['name']; ?>"> <?= $row['name']; ?></label>
				                            </div>

												<?php   		
				                               	}
				                               }
				                               else
				                               {
				                               	echo "No data available";
				                               }
											?>
										</div>
									</div>
									<div class="list-group mb-3">
										<h3>RAM</h3>
										<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector ram" value="2">&nbsp&nbsp 2 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector ram" value="3">&nbsp&nbsp 3 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector ram" value="4">&nbsp&nbsp 4 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector ram" value="6">&nbsp&nbsp 6 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector ram" value="8">&nbsp&nbsp 8 GB</label>
											</div>
										</div>
									</div>
									<div class="list-group mb-3">
										<h3>ROM</h3>
										<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector rom" value="16">&nbsp&nbsp 16 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector rom" value="32">&nbsp&nbsp 32 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector rom" value="64">&nbsp&nbsp 64 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector rom" value="128">&nbsp&nbsp 128 GB</label>
											</div>
											<div class="list-group-item checkbox">
												<label><input type="checkbox" class="common_selector rom" value="256">&nbsp&nbsp 256 GB</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row filter_data">
									
								</div>
								<!-- <div class="row">
										<?php
			                               $products = getProdByCategory($cid);

			                               if (mysqli_num_rows($products) > 0) {
			                               	foreach ($products as $item) {
			                            ?>
			                                
			                               <div class="col-md-4 border p-5">
			                               		<a href="product_view.php?product=<?= $item['slug']; ?> && category_name=<?= $category['name']; ?>">
			                               		<img src="uploads/<?= $item['image']; ?>" class="img-fluid mb-4">
			                               	   </a>
			                               	   <a href="product_view.php?product=<?= $item['name']; ?> && category_name=<?= $category['name']; ?>" style="text-decoration: none; color: black;">
			                               		<h4><?= $item['small_description']; ?><br><br><span class="fw-bold text-primary fs-2">Rs.<?= $item['selling_price']; ?></span><span class="mx-5 fs-6 text-danger">Rs.<s><?= $item['original_price']; ?></s></span> </h4>
			                               	   </a>
			                               	   <p style="color: orange;">Free Delivery by MegaMall</p>
			                               </div>
			                               

			                            <?php   		
			                               	}
			                               }
			                               else
			                               {
			                               	echo "No data available";
			                               }
										?>
									</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php	
	}
	else
	{
		echo "Something went wrong";
	}
    
}
else
{
	echo "Something went wrong";
}

include"includes/footer.php";

?>


<script>
	$(document).ready(function(){

		filter_data();

		function filter_data()
		{
			$('.filter_data').html('<div id="loading" style=""></div>');
			var action = 'fetch_data';
			var cid = $('#cid').val();
			var minimum_price = $('#hidden_minimum_price').val();
			var maximum_price = $('#hidden_maximum_price').val();
			var brand = get_filter('brand');
			var ram = get_filter('ram');
			var rom = get_filter('rom'); 
			$.ajax({
				url:"fetch_data.php",
				method:"POST",
				data:{action:action, cid:cid, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, rom:rom},
				success:function(data){
					$('.filter_data').html(data);
				}
			});
		}

		function get_filter(class_name)
		{
			var filter = [];
			$('.'+class_name+':checked').each(function(){
				filter.push($(this).val() );
			});
			return filter;
		}

		$('.common_selector').click(function(){
			filter_data();
		});

		$('#price_range').slider({
         range:true,
         min:1000,
         max:65000,
         step:500,
         stop:function(event, ui)
         {
            $('#price_show').html('Rs.' + ui.values[0] + ' - Rs.' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
         }
      });


		
	});
</script>


