<?php 
$sql = "SELECT * FROM b_header";
$a_data = mysqli_query($con,$sql);

?>
<section id="banner">
    <i class="fa fa-long-arrow-left slidPrv" aria-hidden="true"></i>
    <i class="fa fa-long-arrow-right slidNext" aria-hidden="true"></i>
    <div class="slider-img">
        <?php
        
        while($row = mysqli_fetch_assoc($a_data)){
            $slide= '<div class="slide-banner" style="background: url(image/'. $row["images"] .')">
            <div class="overly">
                <div class="banner-content">
                    <div class="container text-center">
                        <div class="banner-text">
                            <h2>WE ARE THE MOST</h2>
                            <h3>'. $row["heading"] .'</h3>
                            <p>'. $row["subtitle"] .'</p>
                            <a class="ban-btn" href="#contact">Lets Get Start</a>
                            <div class="social-icon text-center">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                echo $slide;
            } 
        
        ?>
   
    </div>
</section>