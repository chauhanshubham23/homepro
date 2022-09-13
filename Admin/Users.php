<?php include './admin_navbar.php';
include '../Signup/dbconn1.php';
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
      <th class="p-3">Username</th>
      <th class="p-3">Email</th>
      <th class="p-3">Number</th>
      
    </tr>
  </thead>
  <tbody>
<?php
//include '../Signup/dbconn1.php';


$selectquery = "SELECT * FROM `registration`";
$queryy = mysqli_query($conn, $selectquery);
$nums = mysqli_num_rows($queryy);


while($result =  mysqli_fetch_array($queryy)){
    ?>

    <tr>
      <td><?php echo $result['id']; ?></td>
      <td><?php echo $result['username']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['mobile']; ?></td>
     
     
    </tr>
    
  </tbody>
  <?php
    }
    ?>
</table>
        </div>
    </body>
    </html>