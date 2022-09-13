<?php include '../About_us/links.php' ?>
<?php include './home_navbar.php';
// include './project/Admin/add_product.php';
?>

<html>
    <head>
        <title>Salon</title>
        <style>
      <?php include './index.css'  ?>
      <?php include './salon_css.css'  ?>
     

    </style>
    </head>
    <body>
    <?php

include './addcard_db.php';

if(isset($_POST['add_to_cart'])){

//    $product_name = $_POST['product_name'];
//    $product_price = $_POST['product_price'];
//    $product_image = $_POST['product_image'];
//    $product_quantity = 1;

//    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

//    if(mysqli_num_rows($select_cart) > 0){
//       $message[] = 'product already added to cart';
//    }else{
//       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
//       $message[] = 'product added to cart succesfully';
//    }
?>
<script>
    alert("Login first");
</script>

<?php

}


?>
        
        
        <section>
            <div class="salon_main">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="salon_title">
                        <h1 id="">Salon at home</h1>
                        <p> &#8764; Branded cosmetics are used.</p>
                        <p>&#8764; Hygiene friendly: Disposable items like wipes, towel are used.</p>
                        <p>&#8764; Barber with 2 years of experience.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- card -->
            <div class="container">
                <h1 class="choose_card_title">Choose the services.</h1>
                <div class="row justify-content-center align-items-center">
                <?php
            // $con = mysqli_connect('localhost','root');
            // mysqli_select_db($con, 'adproduct');
            include './addcard_db.php';
            // if($con){
            //     // echo 'connection success';
            // }
            //     else{
            //         // echo 'connection failed';
            //     }
                
            // $query = "SELECT  `pname`, `localprice`, `finalprice`, `image` FROM `cart_product` ORDER BY id ASC";
            // $queryfire = mysqli_query($con,$query);
            // $num  =mysqli_num_rows($queryfire);
            // if($num > 0){
            //     while($product = mysqli_fetch_array($queryfire)){
                
              
         
                $select_products = mysqli_query($conn, "SELECT * FROM `cart_product`");
                if(mysqli_num_rows($select_products) > 0){
                   while($row = mysqli_fetch_assoc($select_products)){
             ?>
          

                   

                    <div class="col-lg-4 col-sm-12 col-md-6 d-flex justify-content-center  ">
                    <form action="" method="post">
                    <div class="card my-5 bookcard text-center"  >
                        <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="images" height="100" width="100">
                        
                        <div class="card-body">
                        <div class="start_rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h5 class="card-title10 mb-2"> <?php echo $row['pname']; ?> </h5>
                            
                        <small><s class="text-secondary">$ <?php echo $row['localprice']; ?></s></small>
                        <span class="book_price mx-2"><b> $<?php  echo $row['finalprice']; ?> </b></span><br>
                        
                        <input type="hidden" name="product_name" value="<?php echo $row['pname']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['finalprice']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
                        <input type="submit" name="add_to_cart" class="btn btn-primary book_card_btn my-3" value="Add to Cart">
                        </div>
                        </div>
                        </form>
                    </div>
                   
                    <?php
                }
           }
            ?>

                    <!-- <div class="col-lg-4 col-sm-12 col-md-6 d-flex justify-content-center  ">
                    <div class="card my-5 bookcard text-center"  >
                        <img src="../images/salon1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <div class="start_rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        </div>
                            <h5 class="card-title10 mb-2">Men's Haircut</h5>
                            
                            <small><s class="text-secondary">$123</s></small>
                            <span class="book_price mx-2"><b> $100 </b></span><br>
                            <a href="#" class="btn btn-primary book_card_btn my-3">Book Now</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 d-flex justify-content-center  ">
                    <div class="card my-5 bookcard text-center"  >
                        <img src="../images/salon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <div class="start_rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        </div>
                            <h5 class="card-title10 mb-2">Men's Haircut</h5>
                            
                            <small><s class="text-secondary">$123</s></small>
                            <span class="book_price mx-2"><b> $100 </b></span><br>
                            <a href="#" class="btn btn-primary book_card_btn my-3">Book Now</a>
                        </div>
                        </div>
                    </div> -->
                </div>
            </div>

         
    <!-- how it works -->
            <div class="steps my-3">
                <h1 class="d-flex justify-content-center mb-4 choose_card_title">How it works</h1>
                <div class="row d-flex justify-content-center align-items-center">
                
                    <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1 leftstepcol">
                    <div class="container my-3 boldcontent">
                        <div class="row ">
                            <div class="col-2">
                                <h5 class="mx-3">01</h5>
                            </div>                       
                            <div class="col-10">
                                <h6>Choose a Category from services.</h6>
                                <p>Select from various packages & services.</p>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-2">
                                <h5 class="mx-3">02</h5>
                            </div>                       
                            <div class="col-10">
                                <h6>Choose your time slot.</h6>
                                <p>Wes services 7AM - 11pm.</p>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-2">
                                <h5 class="mx-3">03</h5>
                            </div>                       
                            <div class="col-10">
                                <h6>Relax and enjoy.</h6>
                                <p>Our professionals will get in touch with you half an hour before the services.</p>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-2">
                                <h5 class="mx-3">04</h5>
                            </div>                       
                            <div class="col-10">
                                <h6>Payment.</h6>
                                <p>Pay After done of the work (Only cash on delivery).</p>
                            </div>
                            </div>
                    </div>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-2 rightstepcol">
                      <img src="../Admin/man2.png" class="mx-5" alt="Sample image">
                  </div>
                </div>
            </div>
            <!-- end card -->
        </section>
        <script src="../shrink2.js"></script>

        <?php include '../Categories/footer.php' ?>
    </body>
</html>