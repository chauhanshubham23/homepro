<?php
session_start();
?>
<?php include 'links.php'?>
<html>
  <head>
    <title>Registration</title>
    <style>
      <?php include 'registration.css'; ?>
    </style>
</head>
<body>
<?php
include 'dbconn1.php';

  if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cfpass = mysqli_real_escape_string($conn, $_POST['cfpass']);

    //hash the password 

    // $pass = password_hash($pass,PASSWORD_BCRYPT);
    // $cfpass = password_hash($cfpass,PASSWORD_BCRYPT);

      $token = bin2hex(random_bytes(15));

    $emailquery = "select * from registration where email = '$email' ";
    $query = mysqli_query($conn,$emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount > 0){
      ?>
      <script>
          alert("Email already exists.");
      </script>
      <?php
    }else{
      if($pass === $cfpass){

        $insertquery = "insert into registration (username, email, mobile, pass, cfpass,token,status) values(' $username','$email','$mobile','$pass','$cfpass','$token','inactive')";

        $iquery = mysqli_query($conn,$insertquery);

        if($iquery){
          ?>
          <script>
              alert("Registered Successful");
              location.replace('login.php');
          </script>
          <?php
          
      }else{
          ?>
          <script>
              alert("No Connection ");
          </script>
          <?php
      }

      }else{
        ?>
          <script>
              alert("Password are not matching ");
          </script>
          <?php
      }
    }

  }
?>


    <section>
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <div class="wrapper">
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-0">
                        Sign up
                      </p>
                      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="mx-1 mx-md-4">
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-user-alt"></i>
                          <div class="field mb-0 w-75">
                            <input
                              type="text"
                              class="form-control"
                              id="username"
                              name = "username"
                              required
                            />
                            <label for="">user name</label>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-envelope"></i>
                          <div class="field mb-0 w-75">
                            <input
                              type="email"
                              class="form-control"
                              id="email"
                              name = "email"
                              required
                            />
                            <label for="" class="emailevel">email</label>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-3">
                        <i class="fas fa-phone"></i>
                        <div class="field mb-0 w-75">
                          <input
                            type="number"
                            class="form-control"
                            id="mobile"
                            name = "mobile"
                            maxlength="10"
                            required
                          />
                          <label for="">Mobile</label>
                        </div>
                      </div>
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-lock"></i>
                        <div class="field mb-0 w-75">
                          <input
                            type="password"
                            class="form-control"
                            id="pass"
                            name = "pass"
                            required
                          />
                          <label for="">password</label>
                        </div>
                      </div>
                     
                      <div class="d-flex flex-row align-items-center mb-3">
                        <i class="fas fa-key"></i>
                      <div class="field mb-0 w-75">
                        <input
                          type="password"
                          class="form-control"
                          id="cfpass"
                          name = "cfpass"
                          required
                        />
                        <label for=""> confirm password</label>
                      </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-4">
                      <label class="form-check-label" for="form2Example3">
                        Already have an account? <a href="login.php">Log in</a>
                      </label>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-3">
                      <button type="submit" name = "submit" class="btn btn-success regbtn" >Register</button>
                    </div>  
                      </form>
                    </div>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      <img src="reg_image.webp" class="img-fluid" alt="Sample image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>