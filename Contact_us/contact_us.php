<?php
session_start();
?>
<?php include '../Home/links.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>contact us</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <style>
            <?php include 'contact_style.css'; ?>
        </style>
    </head>
    <body>
    <?php
include 'contact_db.php';

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);


$sqlquery = "INSERT INTO contact_db(name, email, message) VALUES ('" . $name . "','" . $email . "','" . $message . "')";


$i_query = mysqli_query($conn,$sqlquery);
if($i_query){
  
 $_SESSION['successmsg'] = "Thank you For Contacting Us!";
  
  
}else{
  ?>
  <script>
      alert("No Connection ");
  </script>
  <?php
}
}


// $success = $conn->query($sql);


// if (!$success) {
//     die("Couldn't enter data: ".$conn->error);
// }


// echo "Thank You For Contacting Us ";


// $conn->close();
// }

?>
 
    
       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container">
    <a class="navbar-brand" href="#"><b>H</b><span>omepro</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active contactnav" aria-current="page" href="#">Register as professional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contactnav px-3" href="../Home/home.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contactnav px-3" href="../Contact_us/contact_us.php"> <i class="fas fa-phone"></i> Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contactnav px-3 me-4" href="../About_us/about_us.php"> <i class="fas fa-address-book"></i> About Us</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
       <!-- End navbar -->
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

       <section class="contactbody">
           <div class="container">
               <div class="row">
                   <div class="col-lg-7 col-sm-12 col-md-12 my-5">
                    <div class="contactheading">
                    <h1>We're here to help you!</h1>
                    <p class="mx-3 text-muted">If you would like to get in touch, <br> don't hesitate to pick up the phone or   <br> drop us a message. We'd like to here from you.</p>
                    <div class="call my-4">
          <p class=' d-flex'><i class="fas fa-phone me-4 text-success">  </i><a href="tel:7651925211" >7651925211</a> -<a href="tel:7651925211" class="mx-1">8169838267 </a></p>

          <p class=' d-flex'><i class="fas fa-envelope me-4 text-success"></i><a href="mailto:subhamchauhan1586@gmail.com"> subhamchauhan1586@gmail.com</a></p>
          <p class="monday mx-5">Monday - Friday</p>
          </div>
                    </div>
                   </div>
                   <div class="col-lg-5 col-sm-12 col-md-11 my-5">
                   <?php 
                        if(isset($_SESSION['successmsg']))
                        {
                            ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong></strong> <?php echo $_SESSION['successmsg']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>  
                            <?php 
                            unset($_SESSION['successmsg']);
                        }
                    ?>
                   <div class="card contactcard">
                    <div class="card-body">
                    
                        <h2 class="mb-4 mx-3"> <i class="fab fa-telegram text-success mx-2"></i> Send us a message</h2>

                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="mb-3">
                        <label for="name" class="form-label text-secondary">Full name <span class="text-danger"> *</span></label>
                        <input type="name" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                        <label for="email" class="form-label text-secondary">Email address <span class="text-danger"> *</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                        <label for="message" class="form-label text-secondary">Your message <span class="text-danger"> *</span></label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                        <button class="btn btn-success contactbtn w-25 my-3 mb-3" type="submit" name="submit" value="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                    </div>
                   </div>
               </div>
           </div>

       </section>
       <!-- footer -->
<?php include '../Home/footer.php'?>
   
    </body>
</html>