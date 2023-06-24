<?php include"includes/header.php"; ?>
<?php include"../middleware/adminMiddleware.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary">
          <span class=" text-white fs-2">Orders History</span> <a href="orders.php" class="btn btn-info float-end"><i class="fa fa-reply mx-2"></i> Back</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive-sm">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Tracking No.</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>View Product</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                       $orders = getOrdersHistory();

                       if (mysqli_num_rows($orders) > 0) {
                        // code...
                        foreach ($orders as $item) {
                          // code...
                          ?>
                          <tr>
                            <td class="align-middle"><?= $item['id']; ?></td>
                            <td class="align-middle"><?= $item['name']; ?></td>
                            <td class="align-middle"><?= $item['tracking_no']; ?></td>
                            <td class="align-middle">Rs.<?= $item['total_price']; ?></td>
                            <td class="align-middle"><?= $item['created_at']; ?></td>
                            <td class="align-middle">
                              <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-success">View Details</a>
                            </td>
                          </tr>
                          <?php
                        }
                       }
                       else
                       {?>
                           <tr>
                            <td colspan="5">No Orders yet</td>
                           </tr>
                        <?php
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
  </div>
</div>

<?php include"includes/footer.php"; ?>