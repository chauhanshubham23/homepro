<?php
session_start();
ob_start();
?>
<?php include 'links.php'  ?>
<html>

<head>
    <title>Update password</title>
    <style>
      <?php include 'reset_pass_style.css'; ?>
    </style>
</head>

<body>
    <?php
    include 'dbconn1.php';

    if (isset($_POST['submit'])) {
        if (isset($_GET['token'])) {

            $token = $_GET['token'];

            $newpass = mysqli_real_escape_string($conn, $_POST['pass']);
            $cnfpass = mysqli_real_escape_string($conn, $_POST['cfpass']);

            //hash the password 

            // $pass = password_hash($pass,PASSWORD_BCRYPT);
            // $cfpass = password_hash($cfpass,PASSWORD_BCRYPT);


            if ($newpass === $cnfpass) {

                $updatequery = "update registration set pass='$newpass' , cfpass='$cnfpass' where token='$token' ";


                $iquery = mysqli_query($conn, $updatequery);

                if ($iquery) {
                    $_SESSION['msg'] = "Your password has been updated ";
                    header("location:login.php");
                } else {
                    $_SESSION['msgerror'] = "Your password is not updated ";
                    header("location:login.php");
                }
            } else {
                $_SESSION['msgerror'] = "Password are not matching. ";
                // echo "Password are not matching.";
            }
        } else {
            echo 'token id not found';
        }
    }
    ?>


    <div class="container">
        <?php
        if (isset($_SESSION['msgerror'])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show my-4 w-50 mx-auto" role="alert">
                <strong></strong> <?php echo $_SESSION['msgerror']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            unset($_SESSION['msgerror']);
        }
        ?>
        <form action="" method="POST" class="mx-1 ">
            <div class="row">
                <div class="col-lg-5 sol-sm-4 col-lg-3 mx-auto my-5">
                    <div class="card text-center mx-auto my-5">
                        <div class="card-body">

                            <h5 class="card-title my-3" id="title3">Recover Your account</h5>
                            <p class="card-text" id="title4">Please fill password properly.</p>
                            <hr>
                            <div class="input-group mb-3 w-75 mx-auto my-4">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control resetbox" id="pass" name="pass" placeholder="New password" required />
                            </div>
                            <div class="input-group mb-3 w-75 mx-auto">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock-open"></i></span>
                                <input type="password" class="form-control resetbox" id="cfpass" name="cfpass" placeholder="Confirm password" required />
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto mb-4 my-4">
                                <button type="submit" name="submit" class="btn btn-success resetbtn">Update password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>