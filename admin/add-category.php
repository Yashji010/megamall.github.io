<?php include"includes/header.php"; ?>
<?php include"../middleware/adminMiddleware.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="text-white">Add Category</h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Category Name" required>
              </div>
              <div class="col-md-6">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Enter Slug" required>
              </div>
              <div class="col-md-12">
                <label for="description">Description</label>
                <textarea rows="3" name="description" placeholder="Enter Description" class="form-control" required></textarea>
              </div>
              <div class="col-md-12">
                <label for="image">Upload image</label>
                <input type="file" name="image" class="form-control" required>
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
              <div class="row">
                <div class="col-md-6">
                  <label for="status">Status</label>
                  <input type="checkbox" name="status">
                </div>
                <div class="col-md-6">
                  <label for="popular">Popular</label>
                  <input type="checkbox" name="popular">
                </div>
              </div>
              <div class="col-md-12 text-center mt-5">
                <button class="btn btn-primary" type="submit" name="add_category_btn">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include"includes/footer.php"; ?>