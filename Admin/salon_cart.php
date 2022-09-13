<?php include './inside_navbar.php'?>

<?php

include './addcard_db.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:salon_cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:salon_cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:salon_cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        <?php include 'salon_cart_style.css'?>
    </style>

</head>
<body>
    <div class="container my-3">
<div class="shoping_cart">
    <h1 class="d-flex justify-content-center">SHOPPING CART</h1>
    <table class="table table-striped my-3">
  <thead class="bg-dark text-white">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
         include './addcard_db.php';
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart` ");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($row = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $sub_total = number_format($row['price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $row['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $row['quantity']; ?>" >
                  <input type="submit" class="btn btn-warning " value="Update" name="update_update_btn">
               </form>   
            </td>
            <td>$<?php echo $sub_total = number_format($row['price'] * $row['quantity']); ?>/-</td>
            <td><a class="btn btn-danger" href="salon_cart.php?remove=<?php echo $row['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> Remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="salon.php" class="btn btn-info" style="margin-top: 0;">Continue Shopping</a></td>
            <td colspan="3"><b>Grand Total</b></td>
            <td>$<?php echo $grand_total; ?>/-</td>
            <td><a href="salon_cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete all </a></td>
         </tr>

      </tbody>
</table>
<div class="row my-4">
    <div class="col-lg-12 d-flex justify-content-center">
    <div class="checkout-btn ">
      <a href="salon_checkout.php" class="btn btn-success  <?= ($grand_total > 1)?'':'disabled'; ?>">Procced To Checkout</a>
   </div>
    </div>
</div>
</div>
</div>



</body>
</html>