<?php include '../links.php'?>
<html>
    <head>

    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Homepro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="ms-auto"></div>
    <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Register as professional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="../Home//home.php"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="../Contact_us//contact_us.php"> <i class="fas fa-phone"></i> Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light  " href="../About_us/about_us.php"> <i class="far fa-address-book"></i> About Us</a>
            </li>
            <?php
      include './addcard_db.php';
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
            <li class="nav-item">
            <a href="salon_cart.php" class="nav-link text-light me-5"> Cart<i class="fas fa-shopping-cart"></i><span class=" badge bg-danger  rounded-circle "><?php echo $row_count; ?></span> </a>
            </li>
            
          </ul>
    
    </div>
  </div>
</nav>
    </body>
</html>
