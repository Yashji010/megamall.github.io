<?php include"includes/header.php"; ?>
<?php include"../middleware/adminMiddleware.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="text-white">Categories</h4>
        </div>
        <div class="card-body" id="category_table">
          <div class="table-responsive-sm">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $category = getAll("categories");

                if (mysqli_num_rows($category) > 0) {
                  foreach ($category as $item) { ?>
                    <tr>
                      <td><?= $item['id']; ?></td>
                      <td><?= $item['name']; ?></td>
                      <td>
                        <img src="../uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" height="50px" width="50px" class="img-fluid">
                      </td>
                      <td>
                        <?= $item['status'] == '0'? "Visible":"Hidden" ?>
                      </td>  
                      <td>
                        <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a>
                      </td>
                      <td>
                        <!-- <form action="code.php" method="post">
                          <input type="hidden" name="category_id" value="<?= $item['id']; ?>">
                          <button type="submit" class="btn btn-danger" name="delete_category_btn">Delete</button>
                        </form> -->
                        <button type="button" class="btn btn-danger delete_category_btn" value="<?= $item['id']; ?>">Delete</button>
                      </td>
                    </tr>
                    <?php
                  }
                }
                else
                {
                  echo "No Records Found";
                }
              ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include"includes/footer.php"; ?>