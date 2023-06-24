<?php include"includes/header.php"; ?>
<?php include"../middleware/adminMiddleware.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
        if (isset($_GET['id'])) {
          // code...
          $id = $_GET['id'];

          $product = getByID("products",$id);

          if (mysqli_num_rows($product) > 0) {
            // code...
            $data = mysqli_fetch_array($product);
             ?>
               <div class="card">
                <div class="card-header bg-primary">
                  <h4 class="text-white">Edit Product
                    <a href="product.php" class="btn btn-primary float-end">Back</a>
                  </h4>
                </div>
                <div class="card-body">
                  <form action="code.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-12">
                        <label for="">Select Category</label>
                        <select class="form-select" name="category_id">
                          <option selected>Select Category</option>
                          <?php
                            $categories = getAll("categories");

                            if (mysqli_num_rows($categories) > 0) {
                              foreach ($categories as $item) {
                                ?>
                                <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?> ><?= $item['name']; ?></option>
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
                      <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                      <div class="col-md-6 mt-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="<?= $data['name']; ?>" class="form-control" placeholder="Enter Category Name" required>
                      </div>
                      <div class="col-md-6 mt-2">
                        <label>Slug</label>
                        <input type="text" name="slug" value="<?= $data['slug']; ?>" class="form-control" placeholder="Enter Slug" required>
                      </div>
                      <div class="col-md-12">
                        <label for="small_description">Small Description</label>
                        <textarea rows="3" name="small_description" placeholder="Enter Small Description" class="form-control" required><?= $data['small_description']; ?></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="description">Description</label>
                        <textarea rows="3" name="description" placeholder="Enter Description" class="form-control" required><?= $data['description']; ?></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="image">Upload image</label>
                        <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                        <input type="file" name="image" class="form-control mb-2">
                        <label class="mb-0">Current image</label>
                        <img src="../uploads/<?= $data['image']; ?>" alt="Product image" height="50px" width="50px">
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="original_price">Original Price</label>
                        <input type="text" name="original_price" value="<?= $data['original_price']; ?>" class="form-control mb-2" placeholder="Enter Original Price" required>
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="selling_price">Selling Price</label>
                        <input type="text" name="selling_price" value="<?= $data['selling_price']; ?>" class="form-control mb-2" placeholder="Enter Selling Price" required>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label for="qty">Quantity</label>
                          <input type="number" name="qty" value="<?= $data['qty']; ?>" required class="form-control mb-2" placeholder="Enter Quantity">
                        </div>
                        <div class="col-md-3 mt-4">
                          <label for="status">Status</label>
                          <input type="checkbox" name="status" <?= $data['status'] == '0'?'':'checked' ?>>
                        </div>
                        <div class="col-md-3 mt-4">
                          <label for="trending">Trending</label>
                          <input type="checkbox" name="trending" <?= $data['trending'] == '0'?'':'checked' ?>>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" value="<?= $data['meta_title']; ?>" class="form-control" placeholder="Enter meta Title">
                      </div>
                      <div class="col-md-12">
                        <label for="meta_description">Meta Description</label>
                        <textarea rows="3" name="meta_description" class="form-control" placeholder="Enter meta Description"><?= $data['meta_description']; ?></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea rows="3" name="meta_keywords" class="form-control" placeholder="Enter meta Keywords"><?= $data['meta_keywords']; ?></textarea>
                      </div>
                      <div class="col-md-12 text-center mt-5">
                        <button class="btn btn-primary" type="submit" name="update_product_btn">Update</button>
                      </div>
                    </div>
                  </form>
                </div>
               </div>
        <?php
          }
          else
          {
            echo "Product not found for given id";
          }
         
      }
      else
      {
        echo "Id missing from url";
      }
      ?>
    </div>
  </div>
</div>


<?php include"includes/footer.php"; ?>