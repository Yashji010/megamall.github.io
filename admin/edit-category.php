<?php include"includes/header.php"; ?>
<?php include"../middleware/adminMiddleware.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
      if (isset($_GET['id']))
       {
        $id = $_GET['id'];
        $category = getByID("categories", $id);

        if (mysqli_num_rows($category) > 0)
         {
          $data = mysqli_fetch_array($category);
        
        ?>
                <div class="card">
                <div class="card-header bg-primary">
                  <h4 class="text-white">Edit Category
                    <a href="category.php" class="btn btn-primary float-end">Back</a>
                  </h4>
                </div>
                <div class="card-body">
                  <form action="code.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="<?= $data['name'] ?>" class="form-control" placeholder="Enter Category Name" required>
                      </div>
                      <div class="col-md-6">
                        <label>Slug</label>
                        <input type="text" name="slug" value="<?= $data['slug'] ?>" class="form-control" placeholder="Enter Slug" required>
                      </div>
                      <div class="col-md-12">
                        <label for="description">Description</label>
                        <textarea rows="3" name="description" placeholder="Enter Description" class="form-control" required><?= $data['description'] ?></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="image">Upload image</label>
                        <input type="file" name="image" class="form-control">
                        <label for="image">Current image</label>
                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                        <img src="../uploads/<?= $data['image'] ?>" height="100px" width="100px">
                      </div>
                      <div class="col-md-12">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" class="form-control" placeholder="Enter meta Title">
                      </div>
                      <div class="col-md-12">
                        <label for="meta_description">Meta Description</label>
                        <textarea rows="3" name="meta_description" class="form-control" placeholder="Enter meta Description"><?= $data['meta_discription'] ?></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea rows="3" name="meta_keywords" class="form-control" placeholder="Enter meta Keywords"><?= $data['meta_keywords'] ?></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="status">Status</label>
                          <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                        </div>
                        <div class="col-md-6">
                          <label for="popular">Popular</label>
                          <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                        </div>
                      </div>
                      <div class="col-md-12 text-center mt-5">
                        <button class="btn btn-primary" type="submit" name="update_category_btn">Update</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
      <?php
        }
        else
        {
          echo "Category not found";
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