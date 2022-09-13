
<?php
session_start();

if(!isset($_SESSION['username'])){
  echo 'You are logged out';
  header('location:../Signup/login.php');
}
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
     <nav class="navbar navbar-expand-lg navbar-dark p-md-3 fixed-top">
      <div class="container">
        <a class="navbar-brand " href="../Home/home.php"><b>H</b><span class="text-dark">omepro </span></a>
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
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link text-dark space me-2" href="../Signup/professionals.php">Register as professional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space me-2" href="../Home/home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space me-2" href="../Contact_us/contact_us.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space  me-5" href="../About_us/about_us.php">About Us</a>
            </li>
           
            <li class="nav-item">
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="box-shadow: none !important;">Logout</button>
            
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
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Homepro</h5>
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
              href="../Signup/logout.php"
              class="btn btn-danger my-3 w-75"
              role="button"
              data-bs-toggle="button"
              >Logout</a
            >
          </li>
        </ul>
      </div>
    </div>
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
    </body></html>