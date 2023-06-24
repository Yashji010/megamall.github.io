
  <style>
    #active {
      color: white;
    }
  </style>

<b>
<nav class="navbar navbar-expand-sm" style="background-color: darkorange;">
  <div class="container-fluid">
    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#dem">
    <i class="fa-solid fa-bars"></i>
    </button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="#" id="page5" data-bs-toggle="dropdown">ELECTRONICS</a>
          <div class="dropdown-menu">
            <div style="display: inline-flex;">
            <div>
              <a href="mobile.php" class="dropdown-item h5">Mobiles</a>
              <a href="data.php?q=Apple" class="dropdown-item">Apple</a>
              <a href="data.php?q=Mi" class="dropdown-item">Mi</a>
              <a href="data.php?q=Realme" class="dropdown-item">Realme</a>
              <a href="data.php?q=Samsung" class="dropdown-item">Samsung</a>
              <a href="data.php?q=Infinix" class="dropdown-item">Infinix</a>
              <a href="data.php?q=OPPO" class="dropdown-item">OPPO</a>
              <a href="data.php?q=Vivo" class="dropdown-item">Vivo</a>
              <a href="data.php?q=Asus" class="dropdown-item">Asus</a>
              <a href="data.php?q=Motorola" class="dropdown-item">Motorola</a>
            </div>
            <div>
              <a href="#" class="dropdown-item h5">Mobile Accessories</a>
            <a href="data.php?Mobile_cases" class="dropdown-item">Mobile Cases</a>
            <a href="" class="dropdown-item">Headphones & Headsets</a>
            <a href="" class="dropdown-item">Power Banks</a>
            <a href="" class="dropdown-item">Screenguards</a>
            <a href="" class="dropdown-item">Memory Cards</a>
            <a href="" class="dropdown-item">Smart Headphones</a>
            <a href="" class="dropdown-item">Mobile Cables</a>
            <a href="" class="dropdown-item">Mobile Chargers</a>
            <a href="" class="dropdown-item">Mobile Holders</a>

            <a href="#" class="dropdown-item h5">Smart Wearable Tech</a>
            <a href="" class="dropdown-item">Smart Watches</a>
            <a href="" class="dropdown-item">Smart Glasses (VR)</a>
            <a href="" class="dropdown-item">Smart Bands</a>
            </div>
            <div>
              <a href="laptop.php" class="dropdown-item h5">Laptops</a>
            <a href="" class="dropdown-item">Desktop PCs</a>
            <a href="" class="dropdown-item">Gaming Laptops</a>
            <a href="" class="dropdown-item">HP</a>
            <a href="" class="dropdown-item">Dell</a>

            <a href="" class="dropdown-item h5">Computer Accessories</a>
            <a href="" class="dropdown-item">External Hard Disks</a>
            <a href="" class="dropdown-item">Pen Drives</a>
            <a href="" class="dropdown-item">Laptop skins & Decals</a>
            <a href="" class="dropdown-item">Laptop Bags</a>
            <a href="" class="dropdown-item">Mouse</a>

             <a href="" class="dropdown-item h5">Tablets</a>
            <a href="" class="dropdown-item">Apple ipads</a>
            <a href="" class="dropdown-item">Televisions</a>
            </div>
            <div>
              <a href="" class="dropdown-item h5">Speakers</a>
            <a href="" class="dropdown-item">Home Audio Speakers</a>
            <a href="" class="dropdown-item">Home Theaters</a>
            <a href="" class="dropdown-item">Sound bars</a>
            <a href="" class="dropdown-item">Bluetooth Speakers</a>
            <a href="" class="dropdown-item">DTH Set-up box</a>
            </div>
          </div>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="mobile.php" data-bs-toggle="dropdown" id="<?php if($page=='mobile') {echo 'active';}?>">MOBILE</a>
          <div class="dropdown-menu">
              <a href="mobile.php" class="dropdown-item h5">Mobiles</a>
              <a href="product_view.php?product=Vivo" class="dropdown-item">Apple</a>
              <a href="data.php?q=Mi" class="dropdown-item">Mi</a>
              <a href="data.php?q=Realme" class="dropdown-item">Realme</a>
              <a href="data.php?q=Samsung" class="dropdown-item">Samsung</a>
              <a href="data.php?q=Infinix" class="dropdown-item">Infinix</a>
              <a href="data.php?q=OPPO" class="dropdown-item">OPPO</a>
              <a href="product_view.php?product=Vivo" class="dropdown-item">Vivo</a>
              <a href="data.php?q=Asus" class="dropdown-item">Asus</a>
              <a href="data.php?q=Motorola" class="dropdown-item">Motorola</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="#" data-bs-toggle="dropdown" id="<?php if($page=='mob_acc') {echo 'active';}?>">MOBILE ACCESSORIES</a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item h5">Mobile Accessories</a>
            <a href="data.php?Mobile_cases" class="dropdown-item">Mobile Cases</a>
            <a href="" class="dropdown-item">Headphones & Headsets</a>
            <a href="" class="dropdown-item">Power Banks</a>
            <a href="" class="dropdown-item">Screenguards</a>
            <a href="" class="dropdown-item">Memory Cards</a>
            <a href="" class="dropdown-item">Smart Headphones</a>
            <a href="" class="dropdown-item">Mobile Cables</a>
            <a href="" class="dropdown-item">Mobile Chargers</a>
            <a href="" class="dropdown-item">Mobile Holders</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="" data-bs-toggle="dropdown" id="<?php if($page=='smart') {echo 'active';}?>">SMART WEARABLE TECH</a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item h5">Smart Wearable Tech</a>
            <a href="" class="dropdown-item">Smart Watches</a>
            <a href="" class="dropdown-item">Smart Glasses (VR)</a>
            <a href="" class="dropdown-item">Smart Bands</a>
          </div>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="" data-bs-toggle="dropdown" id="<?php if($page=='health') {echo 'active';}?>">HEALTH CARE APPLIANCES</a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item h5">Health Care Appliances</a>
            <a href="" class="dropdown-item">Bp Monitors</a>
            <a href="" class="dropdown-item">Weighting Scale</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="laptop.php" data-bs-toggle="dropdown" id="<?php if($page=='laptop') {echo 'active';}?>">LAPTOPS</a>
          <div class="dropdown-menu">
            <a href="laptop.php" class="dropdown-item h5">Laptops</a>
            <a href="" class="dropdown-item">Desktop PCs</a>
            <a href="" class="dropdown-item">Gaming Laptops</a>
            <a href="" class="dropdown-item">HP</a>
            <a href="" class="dropdown-item">Dell</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="" data-bs-toggle="dropdown" id="<?php if($page=='computer') {echo 'active';}?>">COMPUTER ACCESSORIES</a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item h5">Computer Accessories</a>
            <a href="" class="dropdown-item">External Hard Disks</a>
            <a href="" class="dropdown-item">Pen Drives</a>
            <a href="" class="dropdown-item">Laptop skins & Decals</a>
            <a href="" class="dropdown-item">Laptop Bags</a>
            <a href="" class="dropdown-item">Mouse</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="" data-bs-toggle="dropdown" id="<?php if($page=='tablets') {echo 'active';}?>">TABLETS</a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item h5">Tablets</a>
            <a href="" class="dropdown-item">Apple ipads</a>
            <a href="" class="dropdown-item">Televisions</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" href="" data-bs-toggle="dropdown" id="<?php if($page=='speaker') {echo 'active';}?>">SPEAKERS</a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item h5">Speakers</a>
            <a href="" class="dropdown-item">Home Audio Speakers</a>
            <a href="" class="dropdown-item">Home Theaters</a>
            <a href="" class="dropdown-item">Sound bars</a>
            <a href="" class="dropdown-item">Bluetooth Speakers</a>
            <a href="" class="dropdown-item">DTH Set-up box</a>
          </div>
        </li>
        
          
          
         <li class="nav-item">
          <a class="nav-link" href="index.php" id="<?php if($page=='main') {echo 'active';}?>"><i class="fa-solid fa-house"></i></a>
        </li>
       
                
      </ul>
      
    </div>
  </div>
</nav>
</b>


 <!-- Offcanvas Sidebar -->
          <div class="offcanvas offcanvas-start" id="dem">
            <div class="offcanvas-header" style="background-color: orange;">
               <h1 class="offcanvas-title" style="font-family: 'Pacifico', cursive;">MegaMall</h1>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
          <div class="offcanvas-body bg-dark">
            <div class="card border">
              <div class="card-header" style="background-color: darkorange;">
                <h3>Category</h3>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                
                    <?php
                      $categories = getAllActive("categories");

                      if(mysqli_num_rows($categories) > 0){

                        foreach ($categories as $item) {
                          ?>
                           <a href="products.php?category=<?= $item['name']; ?>" class="list-group-item list-group-item-action h5">
                             <?= $item['name']; ?>
                           </a>
                          <?php
                        }
                      }
                      else
                      {
                        echo "No data available";
                      } 
                    ?>
                </ul>
              </div>
            </div>
            <div>
              <a href="my-orders.php" class="btn fw-bold p-2 w-100" style="background-color: darkorange; color: white; border-radius: 10%; margin-top: 80%;">My Orders</a>
              <a href="logout.php" class="btn fw-bold p-2 w-100" style="background-color: darkorange; color: white; border-radius: 10%; margin-top: 5%;">Logout</a>
            </div>           
          </div>
        </div>

     

