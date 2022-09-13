<?php include './admin_navbar.php' ?>

<html>
    <head>
        <style>
            body .add_product{
                margin-left: 250px;
               
            }
            .card{
                background-color: #CCCCCC;
            }
            .card-title{
                text-transform:uppercase;
                font-weight: bold;
            }
            input[type = text], input[type = file]{
                box-shadow:none !important;
                font-family:Candara;
            }

            .addbtn{
                background: #0081CF;
                box-shadow:none !important;
                border-radius: 0%;
                font-family:Candara;
            }
        </style>
    </head>
    <body>

    <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
    <?php 
include './addcard_db.php';


if(isset($_POST['submit'])){
    $pname = $_POST['name'];
    $lprice = $_POST['lprice'];
    $fprice = $_POST['fprice'];
    $file = $_FILES['image'];

//     $isUploaded = is_uploaded_file($_FILES["image"]["tmp_name"]);
// // $filenameIsImage = preg_match("/\.(gif|jpg)$/", $filename);
// if ($isUploaded) {
// move_uploaded_file($_FILES["image"]["tmp_name"], $filename);


// $insertqueryfire = "INSERT INTO cart_product( pname, localprice,finalprice, image) VALUES (' $pname','$lprice','$fprice','$filename')";

// $queryy = mysqli_query($conn,$insertqueryfire);

// if($queryy){
//     ?>
//     <script>
//         alert("Product inserted Successfully !");
//     </script>
//     <?php
// }
// else{
//     ?>
//     <script>
//         alert("Product insertion failed !");
//     </script>
//     <?php
// }
// }
//  else {
// // header("HTTP/1.1 400 Unable to accept uploaded file.");

// die("Unable to accept uploaded file");
// }
// }


    
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    

    if($fileerror == 0){
        $destfile = '../Admin/upload/'.$filename;
       
        move_uploaded_file($filepath,$destfile);

        $insertqueryfire = "INSERT INTO cart_product( pname, localprice,finalprice, image) VALUES (' $pname','$lprice','$fprice','$destfile')";

        $queryy = mysqli_query($conn,$insertqueryfire);

        if($queryy){
            ?>
         <script>
                alert("Product inserted Successfully !");
            </script>
          <?php
        }
        else{
            ?>
          <script>
                alert("Product insertion failed !");
            </script>
           <?php
        }
    }

}

// Delete product

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `cart_product` WHERE id = $delete_id ") or die('query failed');
    if($delete_query){
        //header('location:admin.php');
       $message[] = 'product has been deleted';
    }else{
       //header('location:admin.php');
       $message[] = 'product could not be deleted';
    };
 };

 //Update product
if(isset($_POST['update_product'])){
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = '../Admin/upload/'.$update_p_image;
 
    $update_query = "UPDATE `cart_product` SET pname = '$update_p_name', finalprice = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'";
 
    if($update_query){
       move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
       $message[] = 'product updated succesfully';
    //    header('location:admin.php');
    }else{
       $message[] = 'product could not be updated';
    //    header('location:admin.php');
    }
 
 }

 

?>


    <div class="add_product">
        <div class="row my-5">
            <div class="col-sm-12 d-flex justify-content-center">
            <div class="card w-50">
            <div class="card-body">
                <h5 class="card-title d-flex justify-content-center mb-4">Add a new product</h5>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control addform mb-3" name="name" placeholder="Enter product name" required>
                    <input type="text" class="form-control addform mb-3" name="lprice" placeholder="Enter local price" required>
                    <input type="text" class="form-control addform mb-3" name="fprice" placeholder="Enter final price" required>
                    <input type="file" class="form-control addform mb-4" name="image">
                    <div class="d-grid gap-2 d-flex justify-content-center ">
                    <input class="btn btn-primary addbtn w-50" type="submit" name="submit" value="Add The Product">
                        
                        </div>
                </form>
                
            </div>
        </div>
            </div>
        </div>
        <!-- Table -->
       <div class="addtable my-5">
       <table class="table table-striped ">
  <thead class="table-dark">
    <tr>
      <th class="p-3">Product Image</th>
      <th class="p-3">Product Name</th>
      <th class="p-3">Product Price</th>
      <th class="p-3">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `cart_product`");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>

      <tr>
      <td><img src=" <?php echo $row['image']; ?>" width="100" height="100" alt=""></td>
         <td><?php echo $row['pname']; ?></td>
         <td>$<?php echo $row['finalprice']; ?>/-</td>
         <td>
            <a href="add_product.php?delete=<?php echo $row['id']; ?>" class=" btn btn-danger delete-btn" onclick="return confirm('Are your sure you want to delete this Product?');"> <i class="fas fa-trash"></i> Delete </a>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="add_product.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning option-btn"> <i class="fas fa-edit"></i> Update </a>
         </td>
      </tr>

      <?php
         };    
         }else{
            $_SESSION['error'] = "No product added";
         };
      ?>
 
  </tbody>
</table>
       </div>
       <!-- Update -->
        <!-- Modal -->
<div class="update">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
        //   if(isset($_GET['edit'])){
        //     $edit_id = $_GET['edit'];
         $select_products = mysqli_query($conn, "SELECT * FROM `cart_product`");
         if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" enctype="multipart/form-data">
   
   <img src="<?php echo $row['image']; ?>" width="100" height="100" alt="" class="mb-5">
   
   <input type="hidden" class="form-control mb-3" name="update_p_id">
   <input type="text" class="form-control mb-3" name="update_p_name" required>
   <input type="number" class="form-control mb-3" name="update_p_price" required>
   <input type="file" class="form-control mb-3" name=" update_p_image" accept="image/png, image/jpg, image/jpeg">


   <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-danger " name="update_product" data-toggle="modal" data-target="#loginModal" value="Update" >
      </div>

  
   </form>
   
   <?php
         }; 
        
         }
         //else{
        //     $_SESSION['error'] = "No product added";
        //  };
        //   };
      ?>
      </div>
     
    </div>
  </div>
</div>
</div>
    <!-- end modal -->
    </div>
    
  

</body>
</html>
