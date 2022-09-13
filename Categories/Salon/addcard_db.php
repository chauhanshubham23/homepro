<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "adproduct";

$conn = mysqli_connect($server,$username,$password,$db);
if($conn){
    /*?>
    <script>
        alert("Connection Successful");
    </script>
    <?php*/
}else{
    /*?>
    <script>
        alert("No Connection ");
    </script>
    <?php*/
}

?>