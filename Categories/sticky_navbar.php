
<html>
    <head>

    </head>
    <body>
        <!-- Navbar  -->
     <nav class="navbar navbar-expand-lg navbar-dark p-md-3 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../Home/home.php"><b>H</b>omepro</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasExample"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="ms-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="#"> Register as professional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="../Home/home.php"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="../Contact_us/contact_us.php"> <i class="fas fa-phone"></i> Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light  " href="../About_us/about_us.php"> <i class="far fa-address-book"></i> About Us</a>
            </li>
            <?php
            session_start();
            
      include './addcard_db.php';
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
            <li class="nav-item">
            <a href="salon_cart.php" class="nav-link text-light me-5"> Cart<i class="fas fa-shopping-cart"></i><span class=" badge bg-danger  rounded-circle "><?php echo $row_count; ?></span> </a>
            </li>
            <li class="nav-item">
            <a href="../Signup/login.php" class="btn btn-danger " role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Logout</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- end nav -->
<!-- Offcanvas Navbar -->

<div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><b>H</b>omepro</h5>
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <hr />
      <div class="offcanvas-body">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active space" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link space" href="../About_us/about_us.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link space" href="../Contact_us/contact_us.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link space" href="#">Register as professional</a>
          </li>
          <li class="nav-item space">
            <a
              href="../Signup/login.php"
              class="btn btn-success my-3 w-75 mainbtn"
              role="button"
              data-bs-toggle="button"
              >Log in</a
            >
          </li>
        </ul>
      </div>
    </div>
    <!-- End Offcanvas Navbar -->
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo 'Welcome,' .$_SESSION['username']  ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You can logout here...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="../Signup/logout.php" class="btn btn-danger " name="logout" data-toggle="modal" data-target="#loginModal" value="logout">Logout</a>
      </div>
    </div>
  </div>
</div>
    <!-- end modal -->
    </body>
</html>