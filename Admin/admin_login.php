<?php include '../About_us/links.php' ?>
<html>
    <head>
        <title>Admin</title>
        <style>
      <?php include 'admin_style.css'; ?>
    </style>
    </head>
    <body>
        <?php 
        include './admindb.php';
        if(isset($_POST['submit'])){
            
            $query = "SELECT * FROM `admin_login` WHERE `Admin_Name` = '$_POST[adminame]' AND `Admin_Password` = '$_POST[password]'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==1){
                echo '<script> alert("Login Successfull !") </script>';
                session_start();
                $_SESSION['AdminLoginId'] = $_POST['adminame'];
                header("location: Admin_panel.php");
            }
            else{
                echo '<script> alert("Incorrect username and password !") </script>';
            }

        }
        
        
        
        ?>


        <div class="row my-5">
            <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
            <div class="card admin_card">
            <div class="card-header">
                <h5>admin login panel</h5>
            </div>
            <div class="card-body">
                
                <form action="" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
                    <input type="text" class="form-control" placeholder="Admin name" name="adminame" >
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="d-grid gap-2 mb-3">
                    <input class="btn btn-primary adminbtn" type="submit" name="submit" value="Sign in">
                    </div>
                    <a href="" class="adminforget">Forget Password?</a>
                </form>
            </div>
        </div>
            </div>
        </div>
    </body>
</html>