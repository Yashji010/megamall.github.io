<?php include"includes/header.php"; ?>
<?php include"../middleware/adminMiddleware.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="text-white">Add Product</h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="post" enctype="multipart/form-data">

            <div class="row">
              <div class="col-md-12">
                <label for="category_id">Select Category</label>
                <select name="category_id" class="form-select" onchange="category()" id="category">
                  <option selected>Select Category</option>
                  <?php
                    $categories = getAll("categories");

                    if (mysqli_num_rows($categories) > 0) {
                      foreach ($categories as $item) {
                        ?>
                        <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                        <?php
                      }
                    }
                    else
                    {
                      echo "No category available";
                    }
                  ?>
                </select>
              </div>
              <div class="col-md-6 mt-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Category Name" required>
              </div>
              <div class="col-md-6 mt-2">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Enter Slug" required>
              </div>
              <div class="col-md-12">
                <label for="small_description">Small Description</label>
                <textarea rows="3" name="small_description" placeholder="Enter Small Description" class="form-control" required></textarea>
              </div>
              <div class="col-md-12">
                <label for="description">Description</label>
                <textarea rows="3" name="description" placeholder="Enter Description" class="form-control" required></textarea>
              </div>
              <div class="col-md-12">
                <label for="image">Upload image</label>
                <input type="file" name="image" class="form-control" required>
              </div>
              <div class="col-md-6 mt-2">
                <label for="original_price">Original Price</label>
                <input type="text" name="original_price" class="form-control" placeholder="Enter Original Price" required>
              </div>
              <div class="col-md-6 mt-2">
                <label for="selling_price">Selling Price</label>
                <input type="text" name="selling_price" class="form-control" placeholder="Enter Selling Price" required>
              </div>
              <div class="row mt-2">
                <div class="col-md-6">
                  <label for="qty">Quantity</label>
                  <input type="number" name="qty" required class="form-control" placeholder="Enter Quantity">
                </div>
                <div class="col-md-3 mt-4">
                  <label for="status">Status</label>
                  <input type="checkbox" name="status">
                </div>
                <div class="col-md-3 mt-4">
                  <label for="trending">Trending</label>
                  <input type="checkbox" name="trending">
                </div>
              </div>
              <div class="col-md-12">
                <label for="meta_title">Meta Title</label>
                <input type="text" name="meta_title" class="form-control" placeholder="Enter meta Title">
              </div>
              <div class="col-md-12">
                <label for="meta_description">Meta Description</label>
                <textarea rows="3" name="meta_description" class="form-control" placeholder="Enter meta Description"></textarea>
              </div>
              <div class="col-md-12">
                <label for="meta_keywords">Meta Keywords</label>
                <textarea rows="3" name="meta_keywords" class="form-control" placeholder="Enter meta Keywords"></textarea>
              </div>
              <div class="col-md-12 text-center mt-5">
                <button class="btn btn-primary" type="submit" name="add_product_btn">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include"includes/footer.php"; ?>

<script>
  function category() {
    // body...
    var x = document.getElementById("category").value;

    alert(var x); 

  }
</script>