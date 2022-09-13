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
        <a class="navbar-brand " href="../Home/index.php"><b>H</b><span class="text-dark">omepro </span></a>
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
              <a class="nav-link text-dark space me-2" href="../Home/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space me-2" href="../Contact_us/contact_us.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark space  me-5" href="../About_us/about_us.php">About Us</a>
            </li>
            <li class="nav-item">
            <a href="../Signup/login.php" class="btn btn-success aboutlogin" >Log in</a>
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
            <a class="nav-link active" aria-current="page" href="../Home/index.php">Home</a>
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
      <!-- main -->
      <div class="main my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-md-12">
            <div class="mainheading">
              <h1>Safe services at home.</h1>
              <h1 class="mx-4">Safe with Homepro.</h1>
              <p class="mainpara p-3">Home services, with on your demand.</p>
            </div>
            <form class="form1">
              <input
                class="form-control form-control-lg me-2"
                type="search"
                placeholder="Search for services"
                aria-label="Search"
              />
              <button class="btn btn-success mainbtn" type="submit">
                Search service
              </button>
            </form>
          </div>
          <div class="col-lg-6 col-sm-12 col-md-12 my-4">
            <div class="container">
              <div class="carousel">
                <div
                  id="carouselExampleFade"
                  class="carousel slide carousel-fade"
                  data-bs-ride="carousel"
                >
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img
                        src="images/ac.png"
                        class="d-block w-100 carousel_image"
                        alt="..."
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        src="images/salo.jpg"
                        class="d-block w-100 carousel_image"
                        alt="..."
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        src="images/painter.png"
                        class="d-block w-100 carousel_image"
                        alt="..."
                      />
                    </div>
                  </div>
                  <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev"
                  >
                    <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleFade"
                    data-bs-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- category -->
     <section>
      <div class="container mt-4">
        <h1 class="card_text mb-3">Categories for your Services</h1>
        <p class="text-secondary" id="cat_para">
          Here, you can choose the services as per your requirement.
        </p>

        <div class="card category_card">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-sm-6">
                  <a href="../Admin/salon_local.php" class="under_line">
                    <img src="images/salon1.png" class="salon" alt="" />
                    <p class="text-center category_text">Salon</p>
                  </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <a href="#" class="under_line">
                    <img src="images/painter1.png" class="salon" alt="" />
                    <p class="text-center category_text">Painter</p>
                  </a>
                </div>
                <div class="col-lg-3 col-sm-6 ">
                  <a href="#" class="under_line">
                    <img src="images/ac1.png" class="salon mx-auto" alt="" />
                    <p class="text-center category_text my-3">
                      AC/Appliances Repair
                    </p>
                  </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <a href="#" class="under_line">
                    <img src="images/plumber.png" class="salon" alt="" />
                    <p class="text-center category_text">Plumber</p>
                  </a>
                </div>
              </div>
              <div class="row">
                
                <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
                  <a href="#" class="under_line">
                    <img src="images/cleaner.png" class="salon" alt="" />
                    <p class="text-center category_text">Cleaner</p>
                  </a>
                  <a href="#" class="under_line ">
                    <img src="images/electrician.png" class="salon" alt="" />
                    <p class="text-center category_text">Electrician</p>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End category -->
<!-- Appliances Repaire -->
<div class="appliances my-5 pb-5 ">
  <h1 id="appl_head" class="pt-4">Appliances Repair</h1>
  <p id="appli_para">Servicing, Repair, Installation, & Uninstallation.</p>
  <div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-sm-6 ">
      <div class="card appl_card">
        <a href="">
          <img src="images/water_puri.png" class="water_images" alt="">
        </a>
        <p class="water_para">water-purifier</p>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 ">
      <div class="card appl_card">
        <a href="">
          <img src="images/washing_machine.png" class="water_images" alt="">
        </a>
        <p class="water_para">washing-machine</p>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 ">
      <div class="card appl_card">
        <a href="">
          <img src="images/refrigerator.png" class="water_images" alt="">
        </a>
        <p class="water_para">refrigerator</p>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 ">
      <div class="card appl_card">
        <a href="">
          <img src="images/Geyser.png" id="guyser" alt="" >
        </a>
        <p class="water_para">guyser</p>
      </div>
    </div>
  </div>
</div>
</div>

<!--end Appliances Repaire -->

<!-- How it works -->
<div class="section3">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-sm-4 col-md-7">
        <div class="clip_path ">
        <div class="container">
          <h1 class=" heading_work">How it works</h1><hr>
          <div class="typeservice d-flex">
          <i class="fas fa-address-card "></i>
            <p class="mx-4 clip_head">Choose the type of service</p> </div>
            <p class="clip_para">Select the service required.</p>
            <div class="typeservice d-flex">
            <i class="fas fa-clock"></i>
            <p class="mx-4 clip_head">Choose your time slot.</p> </div>
            <p class="clip_para">We service 6AM - 10PM.</p>
            <div class="typeservice d-flex">
            <i class="fas fa-bed"></i>
            <p class="mx-4 clip_head">Hassle-free service.</p> </div>
            <p class="clip_para">Our professional will get in touch with you half an our <br> before the service.</p>
            <div class="typeservice d-flex">
            <i class="fas fa-rupee-sign"></i>
            <p class="mx-4 clip_head">Payment method.</p> </div>
            <p class="clip_para">Only cash in delivery.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-sm-4 col-md-5">
      <div class="workimg">
      <img src="images/phone.PNG" alt="">
      </div>
    </div>
  </div>
</div>
</div>
<!-- End hoe it works -->

<script src="../About_us/shrink2.js"></script>
    <?php include './footer.php'?>
    </body>
</html>