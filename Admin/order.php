<?php include './admin_navbar.php';
include './addcard_db.php';
?>
<html>
    <head>
    <style>
        body .order{
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
        <div class="order">
            <h1 class="d-flex justify-content-center">Booking Order</h1><hr>
            <table class="table table-striped ">
  <thead class="table-dark">
    <tr>
      <th class="p-3">id</th>
      <th class="p-3">Name</th>
      <th class="p-3">Number</th>
      <th class="p-3">Email</th>
      <th class="p-3">Method</th>
      <th class="p-3">Address</th>
      <th class="p-3">City</th>
      <th class="p-3">State</th>
      <th class="p-3">Pin-code</th>
    </tr>
  </thead>
  <tbody>
<?php
//include '../Signup/dbconn1.php';


$selectquery = "SELECT * FROM `order`";
$queryy = mysqli_query($conn, $selectquery);
$nums = mysqli_num_rows($queryy);


while($result =  mysqli_fetch_array($queryy)){
    ?>

    <tr>
      <td><?php echo $result['id']; ?></td>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['number']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['method']; ?></td>
      <td><?php echo $result['address']; ?></td>
      <td><?php echo $result['city']; ?></td>
      <td><?php echo $result['state']; ?></td>
      <td><?php echo $result['pin_code']; ?></td>
      
    </tr>
    
  </tbody>
  <?php
    }
    ?>
</table>
        </div>
    </body>
    </html>