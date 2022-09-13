<?php include '../links.php'?>
<?php

include './addcard_db.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $pin_code = $_POST['pin_code'];

   $cart_query = "INSERT INTO `order`(name, number, email, method, address, city, state, pin_code) values('$name','$number','$email',' $method','$address','$city','$state','$pin_code') ";
   $runquery = mysqli_query($conn,$cart_query);
   if($runquery){
       ?>
       <script>
           alert("Order successfull");
       </script>

       <?php
   }
else{
    ?>
       <script>
           alert("Order Failed!");
       </script>

       <?php
}
//    $cart_query = mysqli_query($conn, "SELECT * FROM `order`");
//    $price_total = 0;
//    if(mysqli_num_rows($cart_query) > 0){
//       while($product_item = mysqli_fetch_assoc($cart_query)){
//          $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
//          $product_price = number_format($product_item['price'] * $product_item['quantity']);
//          $price_total += $product_price;
//       };
//    };

//    $total_product = implode(', ',$product_name);
//    $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, address, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$address','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

//    if($cart_query && $detail_query){
//       echo "
//       <div class='order-message-container'>
//       <div class='message-container'>
//          <h3>thank you for shopping!</h3>
//          <div class='order-detail'>
//             <span>".$total_product."</span>
//             <span class='total'> total : $".$price_total."/-  </span>
//          </div>
//          <div class='customer-details'>
//             <p> your name : <span>".$name."</span> </p>
//             <p> your number : <span>".$number."</span> </p>
//             <p> your email : <span>".$email."</span> </p>
//             <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
//             <p> your payment mode : <span>".$method."</span> </p>
//             <p>(*pay when product arrives*)</p>
//          </div>
//             <a href='products.php' class='btn'>continue shopping</a>
//          </div>
//       </div>
//       ";
//    }

}

?>

<html>
    <head>
    <style>
        <?php include 'salon_checkout_style.css' ?>
    </style>
    </head>
    <body>
        
    <div class="container my-4 ">
        <div class="order">
            <h2>Complete your order</h2>
        </div>
        <div class="row d-flex justify-content-center">

        
        <div class="card my-4 ">
            <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="number" class="form-label">Your Number</label>
                        <input type="text" class="form-control" name="number" placeholder="Enter your number">
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="Email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your email">
                        </div>
                    </div>
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="payment" class="form-label">Payment method</label>
                        <select class="form-select" name="method">
                        <option>Cash on delivery</option>
                        <option>PhonePey</option>
                        <option>Google pey</option>
                    </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Eg. Flat-no.">
                        </div>
                    </div>
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" placeholder="Eg. Mumbai">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="State" class="form-label">State</label>
                        <input type="text" class="form-control" name="state" placeholder="Eg. Maharashtra">
                        </div>
                    </div>
                    <div class="col-lg-6 .col-sm-12 ">
                        <div class="mb-3">
                        <label for="pin" class="form-label">Pin Code</label>
                        <input type="text" class="form-control" name="pin_code" placeholder="Eg. 123456">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-center my-3">
                <input type="submit" class="btn btn-primary" value="Order Now" name="submit" class="btn">
                    
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </body>
</html>