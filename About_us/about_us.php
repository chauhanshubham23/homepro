<?php
session_start();
?>
<?php include 'links.php' ?>
<html>
<head>
    <title>About us</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <style>
            <?php include 'about_style.css'; ?>
        </style>
    </head>
    <body>
        <!-- Navbar -->
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
              <a class="nav-link text-dark space  me-5" href="../About_us/about_us.php">About Us</a>
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
 <!-- Banner Image  -->
 <div
      class="banner-image">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                <img src="about_main_img.webp" alt="image" class="aboutimg">
              </div>
              <div class="col-lg-6 col-sm-12">
                  <div class="heading">
                  <h1>About Us</h1>
                  <p>Homepro is online home service provider platform <br> Our aim is to home services on demand Our aim is <br> to give user the liberty to avail any home service <br> according to their time schedule.</p>
                  </div>
              </div>
          </div>
      </div>
      
    </div>

</div>
<!-- content part -->
<div class="section ">
  <div class="container my-4 ">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="heading1">
          <h1>Where we started !</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-12 ">
        <img src="lightbulb.png" class="bulbimg" alt="">
       
      </div>
    </div>
  </div>
    <!-- plant -->
    <div class="container my-4 ">
    <div class="row my-5">
    <div class="col-lg-6 col-sm-11 col-md-12 order-2 order-lg-1 d-flex justify-content-center">
        <img src="plants.png" class="plantimgimg" alt="">
       
      </div>
      <div class="col-lg-6 col-sm-12 order-1 order-lg-2">
        <div class="heading1">
          <h1>How we've grown !</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
    </div>
    </div>
    <!-- tower -->
    <div class="container my-4 ">
    <div class="row my-5">
      <div class="col-lg-6 col-sm-12">
        <div class="heading1">
          <h1>How we've done !</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-12 d-flex justify-content-center">
        <img src="tower.png" class="towerimg" alt="">
       
      </div>
    </div>
    </div>
    <div class="heading1">
    <h1 class="d-flex justify-content-center my-5">Meet the Team</h1>
    </div>
  <div class="container my-5">
    <div class="row">
     <div class="col-lg-6 .col-sm-12 ">
     <div class="card aboutcard1 mb-4 " style="width: 18rem;">
  <img src="myimage1.jpg" class="cardimg mx-auto my-3" alt="...">
  <div class="card-body">
    <h5 class="d-flex justify-content-center">Shubham Chauhan</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="content">
    <p >Some quick example text to build on the card title and make up the bulk of the card's content.</p>

</div>
<a href="#!!" class="show_hide" data-content="toggle-text">Read More</a>
    
  </div>
</div>
     </div>
     <div class="col-lg-6 .col-sm-12 ">
     <div class="card aboutcard2" style="width: 18rem;">
  <img src="myimage1.jpg" class="cardimg mx-auto my-3" alt="...">
  <div class="card-body">
  <h5 class="d-flex justify-content-center">Pranav Sumbre</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="content">
    <p >Some quick example text to build on the card title and make up the bulk of the card's content.</p>

</div>
<a href="#!!" class="show_hide" data-content="toggle-text">Read More </a>
  </div>
</div>
     </div>
    

    </div>
  </div>
</div>
<!-- footer -->
<?php include '../Home/footer.php'?>
<!-- End content part -->
<script src="shrink2.js"></script>
<script>
  $(document).ready(function () {
    $(".content").hide();
    $(".show_hide").on("click", function () {
        var txt = $(".content").is(':visible') ? 'Read More >>' : 'Read Less>>';
        $(".show_hide").text(txt);
        $(this).prev('.content').slideToggle(200);
    });
});
</script>

</body>
</html>