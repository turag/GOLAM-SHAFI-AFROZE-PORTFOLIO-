
   <section id="portfolio" class="portfolio-bg">
    <div class="port-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 about-head heading-bg">
                <h2>OUR PORTFOLIO</h2>
                <h3>SEE OUR LATEST WORKS</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-imag">
                   <?php

                    $sql = "SELECT * FROM b_porfolio";
                    $a_data = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($a_data)){


               ?>
                    <div class="col-md-3">
                        <div class="portfolio-inner">
                            <div class="port-img">
                                <div class="port-overlay">
                                    <a class="venobox" data-gall="gallery01" href="image/<?php echo $row["topimg_1"]?>"><i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <img src="image/<?php echo $row["topimg_2"]?>" alt="port1" class="img-fluid">
                            </div>
                            <div class="port-img">
                                <div class="port-overlay">
                                    <a class="venobox" data-gall="gallery01" href="image/<?php echo $row["btmimg_1"]?>"><i class="fa fa-search-plus"></i></a></div>
                                <img src="image/<?php echo $row["btmimg_2"]?>" alt="port2" class="img-fluid">
                            </div>
                        </div>
                    </div>

               <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>