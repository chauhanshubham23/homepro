<?php
include '../links.php';
?>
<html>
    <head>
    </head>
    <body>
        <div class="book_now">
            <div class="container">
                <div class="row">
                <?php
                $con = mysqli_connect('localhost','root');
            mysqli_select_db($con, 'adproduct');
            // include './addcard_db.php';
            if($con){
                // echo 'connection success';
            }
                else{
                    // echo 'connection failed';
                }
                
            $query = "SELECT  `pname`, `localprice`, `finalprice`, `image` FROM `cart_product` ORDER BY id ASC";
            $queryfire = mysqli_query($con,$query);
            $num  =mysqli_num_rows($queryfire);
            if($num > 0){
                while($product = mysqli_fetch_array($queryfire)){
        //  include './addcard_db.php';
        //  $select_products = mysqli_query($conn, "SELECT * FROM `cart_product`");
        //  if(mysqli_num_rows($select_products) > 0){
        //     while($row = mysqli_fetch_assoc($select_products)){
      ?>
                    <div class="col-lg-5 col-sm-12">
                    <img src="" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-12">
                    <h1><?php echo $product['pname']; ?></h1>
                    </div>
                    <?php
         };    
         }else{
            $_SESSION['error'] = "No product added";
         };
      ?>
                </div>
            </div>
        </div>
    </body>
</html>