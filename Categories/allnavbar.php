<?php include './links.php'?>

<html>
    <head>
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
} 
nav{
    box-shadow: 0px 2px 9px -1px rgba(0,0,0,0.74);
-webkit-box-shadow: 0px 2px 9px -1px rgba(0,0,0,0.74);
-moz-box-shadow: 0px 2px 9px -1px rgba(0,0,0,0.74);
height: 80px;
}
.loginbtnn{
    box-shadow: none !important;
    background-color:rgb(0, 76, 63);
    border: none;
}

  .navbar-brand{
    font-size: 24px;
    font-family: Lucida Calligraphy;
    color: black !important ;
}
.navbar-brand b{
color:rgb(0, 76, 63) !important;
font-size: 42px;
}
.offcanvas-title{
    font-size: 24px;
    font-family: Lucida Calligraphy;
    color: rgb(0, 0, 0) !important ;
}
.offcanvas-title b{
    color:rgb(0, 76, 63) !important;
    font-size: 42px;
}
.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2820, 100, 50, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-toggler {
    
    border:1px solid rgb(0, 76, 63);
}
.nav-link{
    transition: 0.5s ease;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;    
    letter-spacing: 0.4px;
    margin-right: 10px;
    color: black !important;
    
}
.space{
    font-family: 'Roboto', sans-serif;
    font-size: 16px;    
    letter-spacing: 0.4px;
    margin-right: 10px;
    color: rgb(0, 0, 0) !important;
}
        </style>
    </head>
    <body>
        <!-- Navbar  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light p-md-3 ">
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
              <a class="nav-link" href="../Signup/professionals.ph"> Register as professional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Home/home.php"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Contact_us/contact_us.php"> <i class="fas fa-phone"></i> Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  me-5" href="../About_us/about_us.php"> <i class="far fa-address-book"></i> About Us</a>
            </li>
            <li>
            <!-- <a href="cart.php" class="cart">cart <span><?php //echo $row_count; ?></span> </a>

              <div id="menu-btn" class="fas fa-bars"></div>
            </li> -->
            <li class="nav-item">
            <a href="../Signup/login.php" class="btn btn-success loginbtnn" role="button" data-bs-toggle="button">Log in</a>
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
    </body>
</html>