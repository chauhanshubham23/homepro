<?php
session_start();
?>
<?php include 'links.php' ?>
<html>
    <head>
        <title>Login</title>
        <style>
      <?php include 'login_style.css'; ?>
    </style>
    </head>
    <body>
        <?php
        include 'dbconn1.php';
        // if(isset($_POST['submit'])){
        //     $email = $_POST['email'];
        //     $pass = $_POST['pass'];
        //     $email_search = "select * from registration where email = '$email'";
        //     $query = mysqli_query($conn,$email_search);

        //     $email_count = mysqli_num_rows($query);

        //     if($email_count){
        //          $email_pass = mysqli_fetch_assoc($query);

        //          $db_pass = $email_pass['pass'];

        //          $pass_decode = password_verify($pass,$db_pass);
        //          if($pass_decode){
        //              echo 'Login successful'; 
        //          }else{
        //              echo 'Password incorrect';
        //          } 
        //     }else{
        //         echo 'Invalid email';
        //     }
        // }

        if(isset($_POST['submit'])){

          $email = $_POST['email'];
          $pass = $_POST['pass'];
      
          if ($email != "" && $pass != ""){
      
              $sql_query = "select * from registration where email = '$email' and pass = '$pass'";
              $result = mysqli_query($conn,$sql_query);
              $row = mysqli_fetch_array($result);

              if($row > 0){
                  $_SESSION['email'] = $email;
                  $_SESSION['username'] = $row['username'];
                  // header('Location: home.php');
                  ?>
                  <script>
                    alert('Login successful');
                  </script>
                  <?php
                  ?>
                  <script>
                    location.replace('../Home/home.php');
                  </script>
                  <?php
              }else{
                ?>
                <script>
                  alert('Invalid email and password');
                </script>
                <?php
              }
      
          }
      
      }
        ?>

    <section>
          <div class="container">
             <div class="card">
                 <div class="card-body">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="login_image.webp"
                              class="img-fluid" alt="Sample image">
                          </div>
                      
                      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                      <?php 
                        if(isset($_SESSION['msg']))
                        {
                            ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong></strong> <?php echo $_SESSION['msg']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>  
                            <?php 
                            unset($_SESSION['msg']);
                        }
                    ?>
                          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                <p class="text-center h1 fw-bold mb-5 mx-0 mx-md-5 mt-4">
                                    Log in
                                  </p>
                    
                              </div>
                              <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-envelope"></i>
                                <div class="field1 mb-0 w-75">
                                  <input
                                    type="email"
                                    class="form-control "
                                    id="email"
                                    name="email"
                                    required
                                  />
                                  <label for="">email</label>
                                </div>
                              </div>
                              <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-key"></i>
                              <div class="field1 mb-0 w-75">
                                <input
                                  type="password"
                                  class="form-control "
                                  id="pass"
                                  name="pass"
                                  required
                                />
                                <label for="">password</label>
                              </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                               
                                <a href="recover_email.php" class="text-body forpass">Forgot password?</a>
                              </div>
                            <div class="d-flex justify-content-center mx-4 my-4 mb-3 mb-lg-3">
                                <button type="submit" name="submit" class="btn btn-success loginbtn" value="Log in">Log in</button>
                              </div>
                              <div class="form-check d-flex justify-content-center mb-4">
                                <label class="form-check-label" for="form2Example3">
                                  Don't have an account? <a href="registration.php">Register here</a>
                                </label>
                              </div> 
                          </form>
                        </div>
                      </div>
                     
                 </div>
             </div>
          </div>
      </section>

    </body>
</html>