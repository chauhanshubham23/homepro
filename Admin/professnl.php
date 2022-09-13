<?php include './admin_navbar.php' ?>
<html>
    <head>
    <style>
        body .prof{
            margin-left: 250px;
        }
        .addbtn{
          float: right;
          margin: 20px 30px;
          box-shadow: none !important;
          font-family: Calisto MT;
          
        }
    </style>
    </head>
    <body>
      <a href="./add_product.php" class="btn btn-success addbtn">Add Product</a>
        <div class="prof my-5">
        <table class="table table-striped ">
  <thead class="table-dark">
    <tr>
      <th class="p-3">id</th>
      <th class="p-3">Name</th>
      <th class="p-3">Mobile</th>
      <th class="p-3">Email</th>
      <th class="p-3">What you do</th>
      <th class="p-3">Image</th>
    </tr>
  </thead>
  <tbody>
<?php
include '../Signup/dbconn1.php';

    $selectquery = "select * from professionals";
    $queryy = mysqli_query($conn, $selectquery);
    $nums = mysqli_num_rows($queryy);
    

    while($result =  mysqli_fetch_array($queryy)){
        ?>

    <tr>
      <td><?php echo $result['id']; ?></td>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['mobile']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['wyo']; ?></td>
      <td><img src="<?php echo $result['image']; ?>" width="100" height="100" alt=""></td>
    </tr>
        <?php
    }
    ?>


 
  </tbody>
</table>
        </div>
    </body>
</html>