<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    echo 'You are logged out';
    header('location:./Admin_login.php');
  }
?>
<?php include '../About_us/links.php' ?>
<html>
    <head>

</head>
<style>
    <?php include 'admin_navbar_style.css'; ?>
</style>
<body>
<div id="wrapper">

<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav fixed-left ">
        <li class="sidebar-brand border-bottom ">
            <a href="#">
            <b>H</b>omepro
            </a>
        </li>
        <li>
            <a class=" border-bottom p-2" id="dashboard" href="#">Dashboard</a>
        </li>
        <li>
            <a class=" border-bottom p-2" href="./Users.php">Users</a>
        </li>
        <li>
            <a class=" border-bottom p-2" href="./professnl.php">Professionals</a>
        </li>
        <li>
            <a class=" border-bottom p-2" href="./order.php">Order</a>
        </li>
        <li>
            <a class=" border-bottom p-2" href="./feedback.php">Feedback</a>
        </li>
        <li>
            <a class=" border-bottom p-2" href="#">Services</a>
        </li>
        <li>
            <a class=" border-bottom p-2" href="#">Contact</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->

    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom p-2">
                    <div class="container-fluid">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fas fa-bars"></i></a>
                    <h2 class="mx-3"> <?php echo $_SESSION['AdminLoginId']; ?> Dashboard</h2>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nsc" aria-controls="nsc" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="nsc">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                
                                <li class="nav-item"><a class="btn btn-danger me-3" href="./admin_logout.php">Log out</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </nav>
<!-- </div> -->
<!-- /#page-content-wrapper -->

</div>
<script>
    $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

</script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>