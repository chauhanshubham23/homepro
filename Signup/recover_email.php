<?php
session_start();
?>
<?php include 'links.php'  ?>
<html>

<head>
    <title>Forget password</title>
    <style>
      <?php include 'recovery_email_style.css'; ?>
    </style>
</head>

<body>

    <?php
    include 'dbconn1.php';

    if (isset($_POST['submit'])) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);


        $emailquery = "select * from registration where email = '$email' ";
        $query = mysqli_query($conn, $emailquery);

        $emailcount = mysqli_num_rows($query);
        if ($emailcount) {
            $userdata = mysqli_fetch_assoc($query);
            $username = $userdata['username'];
            $token = $userdata['token'];


            $subject = "Password reset";
            $body = "Hi, $username. Click here to reset your password http://localhost/project/Signup/reset_pass.php?token=$token ";
            $sender_email = "From: subhamchauhan1586@gmail.com";

            if (mail($email, $subject, $body, $sender_email)) {
                $_SESSION['msg'] = "Check your mail to reset your password $email";
                header('location:login.php');
            } else {
                echo "Email sending failed...";
            }
        } else {
            $_SESSION['emailerror'] = "Email not found!";
        }
    }
    ?>


    <div class="container">
        <?php
        if (isset($_SESSION['emailerror'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show w-25 my-4 mx-auto" role="alert">
                <strong></strong> <?php echo $_SESSION['emailerror']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            unset($_SESSION['emailerror']);
        }
        ?>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="mx-1 ">
            <div class="row">
                <div class="col-lg-5 sol-sm-4 col-lg-3 mx-auto my-5">
                    <div class="card text-center mx-auto my-5">
                        <div class="card-body">
                            <i class="fas fa-lock" style="font-size: 70px;"></i>
                            <h5 class="card-title my-3" id="title1">Forgot password?</h5>
                            <p class="card-text" id="title2">Please fill email id properly.</p>
                            <div class="input-group mb-3 w-75 mx-auto">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control recovertext" id="email" name="email" placeholder="Enter email" required />
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto mb-4 my-4">
                                <button type="submit" name="submit" class="btn btn-success recoverybtn">Send email</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>