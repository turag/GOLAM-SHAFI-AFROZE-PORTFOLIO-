
<?php
$var = $_SERVER['DOCUMENT_ROOT'];
$path = $var.'/SimplePhpSite-master';
include '../includes/db/db.php';


// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"])) {
    header("location: ../admin/login.php");
    exit;
}
$sql = "SELECT * FROM b_user WHERE id=1";
$a_data = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($a_data);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <style>
        .dropdown-menu{
            margin-left: -150px;
        }
    </style>
</head>

<body id="page-top">



<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="navbar-brand mr-1" href="#">Hi! <?php echo $row['username'];?></a>
            </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="changepassword.php">Change Password</a>
                <div class="dropdown-divider"></div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <button name="logout" class="dropdown-item">Log Out</button>
                </form>
                <?php
                if (isset($_SESSION["loggedin"])) {
                    if(isset($_POST['logout'])){
                        session_destroy();
                        header("location: login.php");
                    }
                }
                ?>
            </div>
        </li>

    </ul>

</nav>

<div id="wrapper" style="padding-left: 12%; padding-top: 60px;">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav fixed-top " data-spy="affix" style="margin-top: 55px;">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <?php
        $name = 'SELECT * FROM b_navigator';
        $result = $con->query($name);
        while($row = $result->fetch_assoc()) {
            ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $row['slag']?>.php">
                    <i class="<?php echo $row['icon']?>"></i>
                    <span><?php echo $row['menuName']?></span></a>
            </li>
            <?php
        }
        ?>
        <li class="nav-item">
            <a class="nav-link" href="plan.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Our Plan</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="count.php">
                <i class="fas fa-fw fa-clock"></i>
                <span>Count</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="testimonial.php">
                <i class="fas fa-fw fa-comment"></i>
                <span>Testimonial</span></a>
        </li>
    </ul>