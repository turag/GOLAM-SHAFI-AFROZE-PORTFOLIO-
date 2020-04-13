<?php
    $var = $_SERVER['DOCUMENT_ROOT'];
    $path = $var.'/SimplePhpSite-master';
    include 'includes/db/db.php';

    $name = 'SELECT * FROM b_companyname';
    $result = $con->query($name);
     while($row = $result->fetch_assoc()) {
?>
<!-- Preloader Part Start -->
<div class="preload-main">
    <div class='preloader'>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- Preloader Part End -->
<!-- HEADER AREA START -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><b><?php echo strtoupper($row["name"]); }?></b></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <?php


        $sql = "SELECT * FROM b_navigator";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row


        ?>
        <div class="collapse navbar-collapse menu-main" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto menu-item">
               <?php 
              while($row = $result->fetch_assoc()) {
                              
                ?>
                    <?php
                      echo  "<li class='nav-item'>";
                      echo '<a class="nav-link" href="'.'#' . $row["slag"]. ' ">'. $row["menuName"] .'</a>';  
                      echo "</li>";
                    ?>
                <?php   
                }

                }   
            ?>
            </ul>
        </div>
    </div>
</nav>


<!-- HEADER AREA END -->