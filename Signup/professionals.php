<?php include '../Categories/allnavbar.php' ?>
<html>
    <head>
        <style>
            <?php include './professionals_css.css' ?>
        </style>
    </head>
    <body>
<?php include './dbconn1.php';


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['number'];
    $email = $_POST['email'];
    $wyd = $_POST['wyd'];
    $file = $_FILES['img'];

    // print_r($image);
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){
        $destfile = '../Signup/upload/'.$filename;
        // echo "$destfile";
        move_uploaded_file($filepath,$destfile);

        $insertqueryfire = "INSERT INTO professionals(name, mobile, email, wyo, image) VALUES ('$name','$mobile','$email','$wyd','$destfile')";

        $queryy = mysqli_query($conn,$insertqueryfire);

        if($queryy){
            ?>
            <script>
                alert("Inserted Successfully !");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Data insertion failed !");
            </script>
            <?php
        }
    }

}


?>

    <section class="bodycolor">
    <div class="container">
        <div class="row justify-content-center align-items-center">   
            <div class="col-lg-6 col-sm-12 col-md-6 order-2 order-lg-1 my-5">   
                <div class="prof_heading">
                    <h1>earn more. earn respect.</h1>
                    <p class="text-secondary mx-3">Join more partners across different <br> states in india.</p>
                </div>
                </div>
           
            <div class="col-md-6 col-lg-6 col-xl-6  order-1 order-lg-2 ">
                <div class="prof_img ">
                    <img src="../Categories/images/prof_img.png" alt="" class="mx-5">
                </div>
            </div>
        </div>
        </div>
        </section>
        <!--  -->
       <div class="business my-5">
           <h1 class=" d-flex justify-content-center mb-5 ">Let's Talk about your business.</h1>
           
            <div class="prof_bg_img">
                
            <div class="row ">   
            <div class="col-lg-6 col-sm-12 col-md-6  my-5"> 
                  <div class="container">
               <h2 class="mx-3">Join homepro to change your life</h2>
               <p class="mx-3 my-4"> &#8902; Homepro is an app-based marketplace that employers professionals like you become your own boss.</p>
               <p class="mx-3"> &#8902; If you have 1 year of related experiance in any of these fields, You can join Homepro.</p>
                </div>
                </div>
            <div class="col-md-6 col-lg-6 col-xl-6  ">
                <div class="container ">
                <div class="card my-5 me-5 prof_card ">
                    <div class="card-body">                       
                       <form action="" method="POST" enctype="multipart/form-data">
                       <div class="mb-3">
                        
                        <input type="text" class="form-control form-control-lg" name="name" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                        <input type="number" class="form-control form-control-lg" name="number" placeholder="Mobile Number">
                        </div>
                        <div class="mb-3">
                        <input type="email" class="form-control form-control-lg" name="email" placeholder="Enter Email">
                        </div>
                        <div class="mb-3">
                        <input type="text" class="form-control form-control-lg" name="wyd" placeholder="What do you do">
                        </div>
                        <div class="mb-3">
                        <input type="file" class="form-control form-control-lg" name="img">
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                        <input class="btn btn-success prof_btn" type="submit" name="submit" value="Get in touch">
                        </div>
                       
                       </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
           </div>
           </div>
        <!-- footer -->
        <?php include '../Categories/footer.php' ?>
    </body>
</html>