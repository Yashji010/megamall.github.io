<?php include"includes/header.php"; ?>
<?php include"../middleware/adminMiddleware.php"; ?>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="">Hello admin</h2>
			<div class="row">
        <div class="col-md-6 mb-3">
          <a href="category.php">
          <div class="card bg-primary p-5 text-center">
            <div class="card-header bg-primary">
              <h2 class="text-white">All Category</h2>
            </div>
            <div class="card-body">
              <h1 class="text-white"><i class="fa fa-list"></i></h1>
            </div>
          </div>
         </a>
        </div>
        <div class="col-md-6 mb-3">
          <a href="add-category.php">
          <div class="card bg-info p-5 text-center">
            <div class="card-header bg-info">
              <h2 class="text-white">Add Category</h2>
            </div>
            <div class="card-body">
              <h1 class="text-white"><i class="fa fa-plus"></i></h1>
            </div>
          </div>
         </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <a href="product.php">
          <div class="card bg-warning p-5 text-center">
            <div class="card-header bg-warning">
              <h2 class="text-white">All Product</h2>
            </div>
            <div class="card-body">
              <h1 class="text-white"><i class="fa fa-list"></i></h1>
            </div>
          </div>
         </a>
        </div>
        <div class="col-md-6 mb-3">
          <a href="add-product.php">
          <div class="card bg-dark p-5 text-center">
            <div class="card-header bg-dark">
              <h2 class="text-white">Add Product</h2>
            </div>
            <div class="card-body">
              <h1 class="text-white"><i class="fa fa-plus"></i></h1>
            </div>
          </div>
         </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <a href="orders.php">
          <div class="card bg-success p-5 text-center">
            <div class="card-header bg-success">
              <h2 class="text-white">Orders</h2>
            </div>
            <div class="card-body">
              <h1 class="text-white"><i class="fa fa-list"></i></h1>
            </div>
          </div>
         </a>
        </div>
        <div class="col-md-6 mb-3">
          <a href="order-history.php">
          <div class="card bg-secondary p-5 text-center">
            <div class="card-header bg-secondary">
              <h2 class="text-white">Orders History</h2>
            </div>
            <div class="card-body">
              <h1 class="text-white"><i class="fa fa-plus"></i></h1>
            </div>
          </div>
         </a>
        </div>
      </div>
		</div>
	</div>
</div>


<?php include"includes/footer.php"; ?>