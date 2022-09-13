
<?php
session_start();

?>
<?php include 'links.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home-page</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      <?php include 'index.css'; ?>
    </style>
    </head>
    <body>
        <!-- Navbar  -->
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
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark space" href="#">Register as professional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space" href="../Home/home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space" href="../Contact_us/contact_us.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space  me-5" href="../About_us//about_us.php">About Us</a>
            </li>
            <li class="nav-item">
            <a href="../Signup//login.php" class="btn btn-success aboutlogin" role="button" data-bs-toggle="button">Log in</a>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../About_us/about_us.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Contact_us/contact_us.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register as professional</a>
          </li>
          <li class="nav-item">
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
    </body></html>